<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHargaRequest;
use App\Http\Requests\UpdateHargaRequest;
use App\Repositories\HargaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class HargaController extends AppBaseController
{
    /** @var HargaRepository $hargaRepository*/
    private $hargaRepository;

    public function __construct(HargaRepository $hargaRepo)
    {
        $this->hargaRepository = $hargaRepo;
    }

    /**
     * Display a listing of the Harga.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hargas = $this->hargaRepository->paginate(10);
        $hasHarga = $hargas->count() > 0;

        return view('hargas.index')
            ->with('hargas', $hargas)
            ->with('hasHarga', $hasHarga);
    }

    /**
     * Show the form for creating a new Harga.
     *
     * @return Response
     */
    public function create()
    {
        return view('hargas.create');
    }

    /**
     * Store a newly created Harga in storage.
     *
     * @param CreateHargaRequest $request
     *
     * @return Response
     */
    public function store(CreateHargaRequest $request)
    {
        $request->validate([
            'pengembangan' => 'required|numeric|min:0',
            'pemeliharaan_gedung' => 'required|numeric|min:0',
            'peningkatan_mutu' => 'required|numeric|min:0',
            'kegiatan_belajar' => 'required|numeric|min:0',
            'buku_paket' => 'required|numeric|min:0',
            'seragam_putra' => 'required|numeric|min:0',
            'seragam_putri' => 'required|numeric|min:0',
            'spp' => 'required|numeric|min:0',
            'total_putra' => 'required|numeric|min:0',
            'total_putri' => 'required|numeric|min:0',
        ]);
        
        $input = $request->all();

        foreach ($input as $key => $value) {
            if (is_numeric($value) && $value < 0) {
                Flash::error('Nilai tidak boleh negatif.');
                return redirect()->back()->withInput();
            }
        }

        $input['total_putra'] = $input['pengembangan'] + $input['pemeliharaan_gedung'] + $input['peningkatan_mutu'] + $input['kegiatan_belajar'] + $input['buku_paket'] + $input['seragam_putra'] + $input['spp'];
        $input['total_putri'] = $input['pengembangan'] + $input['pemeliharaan_gedung'] + $input['peningkatan_mutu'] + $input['kegiatan_belajar'] + $input['buku_paket'] + $input['seragam_putri'] + $input['spp'];


        $harga = $this->hargaRepository->create($input);

        Flash::success('Harga saved successfully.');

        return redirect(route('hargas.index'));
    }

    /**
     * Display the specified Harga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $harga = $this->hargaRepository->find($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        return view('hargas.show')->with('harga', $harga);
    }

    /**
     * Show the form for editing the specified Harga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $harga = $this->hargaRepository->find($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        return view('hargas.edit')->with('harga', $harga);
    }

    /**
     * Update the specified Harga in storage.
     *
     * @param int $id
     * @param UpdateHargaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHargaRequest $request)
    {
        $input = $request->all();

        foreach ($input as $key => $value) {
        if (is_numeric($value) && $value < 0) {
            Flash::error('Nilai tidak boleh negatif.');
            return redirect()->back()->withInput();
            }
        }

        $harga = $this->hargaRepository->find($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        $input['total_putra'] = $input['pengembangan'] + $input['pemeliharaan_gedung'] + $input['peningkatan_mutu'] + $input['kegiatan_belajar'] + $input['buku_paket'] + $input['seragam_putra'] + $input['spp'];
        $input['total_putri'] = $input['pengembangan'] + $input['pemeliharaan_gedung'] + $input['peningkatan_mutu'] + $input['kegiatan_belajar'] + $input['buku_paket'] + $input['seragam_putri'] + $input['spp'];

        $harga = $this->hargaRepository->update($input, $id);

        Flash::success('Harga updated successfully.');

        return redirect(route('hargas.index'));
    }

    /**
     * Remove the specified Harga from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $harga = $this->hargaRepository->find($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        $this->hargaRepository->delete($id);

        Flash::success('Harga deleted successfully.');

        return redirect(route('hargas.index'));
    }
}
