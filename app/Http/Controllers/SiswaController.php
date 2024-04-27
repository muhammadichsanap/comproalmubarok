<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Repositories\SiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;
use App\Imports\SiswaImport; // Sesuaikan namespace
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Siswa;
use Illuminate\Support\Facades\Log;

class SiswaController extends AppBaseController
{
    /** @var SiswaRepository $siswaRepository*/
    private $siswaRepository;

    public function __construct(SiswaRepository $siswaRepo)
    {
        $this->siswaRepository = $siswaRepo;
    }

    /**
     * Display a listing of the Siswa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $siswas = $this->siswaRepository->paginate(10);

        return view('siswas.index')
            ->with('siswas', $siswas);
    }

    /**
     * Show the form for creating a new Siswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('siswas.create');
    }

    /**
     * Store a newly created Siswa in storage.
     *
     * @param CreateSiswaRequest $request
     *
     * @return Response
     */
    public function store(CreateSiswaRequest $request)
    {
        $input = $request->all();

        $siswa = $this->siswaRepository->create($input);

        Flash::success('Siswa saved successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Show the form for editing the specified Siswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.edit')->with('siswa', $siswa);
    }

    /**
     * Update the specified Siswa in storage.
     *
     * @param int $id
     * @param UpdateSiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSiswaRequest $request)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        $siswa = $this->siswaRepository->update($request->all(), $id);

        Flash::success('Siswa updated successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Remove the specified Siswa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        $this->siswaRepository->delete($id);

        Flash::success('Siswa deleted successfully.');

        return redirect(route('siswas.index'));
    }

    // Tambahkan method importexcel di dalam SiswaController
    public function importexcel(Request $request){
        if ($request->hasFile('file')) {
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();

            // Membuat direktori jika tidak ada
            $targetDir = 'Siswadata';
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            // Menentukan path tujuan
            $destinationPath = public_path($targetDir . '/' . $namafile);

            // Memindahkan file
            if ($data->move($targetDir, $namafile)) {
                Excel::import(new SiswaImport, $destinationPath);
                Flash::success('File berhasil diimpor.');
            } else {
                Flash::error('Gagal memindahkan file.');
            }

            return redirect()->back();
        } else {
            Flash::error('File tidak ditemukan.');
            return redirect()->back();
        }
    }

    // Method show untuk menampilkan detail siswa
    public function show($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.show')->with('siswa', $siswa);
    }
}