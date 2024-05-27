<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Repositories\SiswaRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;
use App\Imports\SiswaImport;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /** @var SiswaRepository $siswaRepository */
    private $siswaRepository;

    public function __construct(SiswaRepository $siswaRepo)
    {
        $this->siswaRepository = $siswaRepo;
    }

    public function index(Request $request)
    {
        $siswas = $this->siswaRepository->paginate(10);

        return view('siswas.index')
            ->with('siswas', $siswas);
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(CreateSiswaRequest $request)
    {
        $input = $request->all();

        $siswa = $this->siswaRepository->create($input);

        Flash::success('Siswa saved successfully.');

        return redirect(route('siswas.index'));
    }

    public function edit($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.edit')->with('siswa', $siswa);
    }

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

    public function exportexcel()
    {
        $siswas = Siswa::all();

        if ($siswas->isEmpty()) {
            return redirect()->route('siswas.index')->with('warning', 'Tidak ada data untuk diekspor.');
        }

        return Excel::download(new SiswaExport, 'Data Siswa.xlsx');
    }

    public function importexcel(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        if ($request->hasFile('file')) {
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();

            $targetDir = 'Siswadata';
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            $destinationPath = public_path($targetDir . '/' . $namafile);

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

    public function show($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.show')->with('siswa', $siswa);
    }

    public function deleteAll()
    {
        Siswa::truncate();
        return redirect()->route('siswas.index')->with('success', 'All siswa data deleted successfully.');
    }
}