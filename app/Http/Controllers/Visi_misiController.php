<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisi_misiRequest;
use App\Http\Requests\UpdateVisi_misiRequest;
use App\Repositories\Visi_misiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class Visi_misiController extends AppBaseController
{
    /** @var Visi_misiRepository $visiMisiRepository*/
    private $visiMisiRepository;

    public function __construct(Visi_misiRepository $visiMisiRepo)
    {
        $this->visiMisiRepository = $visiMisiRepo;
    }

    /**
     * Display a listing of the Visi_misi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $visiMisis = $this->visiMisiRepository->paginate(10);

        return view('visi_misis.index')
            ->with('visiMisis', $visiMisis);
    }

    /**
     * Show the form for creating a new Visi_misi.
     *
     * @return Response
     */
    public function create()
    {
        return view('visi_misis.create');
    }

    /**
     * Store a newly created Visi_misi in storage.
     *
     * @param CreateVisi_misiRequest $request
     *
     * @return Response
     */
    public function store(CreateVisi_misiRequest $request)
    {
        $input = $request->all();

        $visiMisi = $this->visiMisiRepository->create($input);

        Flash::success('Visi Misi saved successfully.');

        return redirect(route('visiMisis.index'));
    }

    /**
     * Display the specified Visi_misi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visiMisi = $this->visiMisiRepository->find($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        return view('visi_misis.show')->with('visiMisi', $visiMisi);
    }

    /**
     * Show the form for editing the specified Visi_misi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visiMisi = $this->visiMisiRepository->find($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        return view('visi_misis.edit')->with('visiMisi', $visiMisi);
    }

    /**
     * Update the specified Visi_misi in storage.
     *
     * @param int $id
     * @param UpdateVisi_misiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisi_misiRequest $request)
    {
        $visiMisi = $this->visiMisiRepository->find($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        $visiMisi = $this->visiMisiRepository->update($request->all(), $id);

        Flash::success('Visi Misi updated successfully.');

        return redirect(route('visiMisis.index'));
    }

    /**
     * Remove the specified Visi_misi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visiMisi = $this->visiMisiRepository->find($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        $this->visiMisiRepository->delete($id);

        Flash::success('Visi Misi deleted successfully.');

        return redirect(route('visiMisis.index'));
    }
}
