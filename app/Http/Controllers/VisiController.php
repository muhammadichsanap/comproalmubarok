<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisiRequest;
use App\Http\Requests\UpdateVisiRequest;
use App\Repositories\VisiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VisiController extends AppBaseController
{
    /** @var VisiRepository $visiRepository*/
    private $visiRepository;

    public function __construct(VisiRepository $visiRepo)
    {
        $this->visiRepository = $visiRepo;
    }

    /**
     * Display a listing of the Visi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $visis = $this->visiRepository->paginate(10);

        return view('visis.index')
            ->with('visis', $visis);
    }

    /**
     * Show the form for creating a new Visi.
     *
     * @return Response
     */
    public function create()
    {
        return view('visis.create');
    }

    /**
     * Store a newly created Visi in storage.
     *
     * @param CreateVisiRequest $request
     *
     * @return Response
     */
    public function store(CreateVisiRequest $request)
    {
        $input = $request->all();

        $visi = $this->visiRepository->create($input);

        Flash::success('Visi saved successfully.');

        return redirect(route('visis.index'));
    }

    /**
     * Display the specified Visi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visi = $this->visiRepository->find($id);

        if (empty($visi)) {
            Flash::error('Visi not found');

            return redirect(route('visis.index'));
        }

        return view('visis.show')->with('visi', $visi);
    }

    /**
     * Show the form for editing the specified Visi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visi = $this->visiRepository->find($id);

        if (empty($visi)) {
            Flash::error('Visi not found');

            return redirect(route('visis.index'));
        }

        return view('visis.edit')->with('visi', $visi);
    }

    /**
     * Update the specified Visi in storage.
     *
     * @param int $id
     * @param UpdateVisiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisiRequest $request)
    {
        $visi = $this->visiRepository->find($id);

        if (empty($visi)) {
            Flash::error('Visi not found');

            return redirect(route('visis.index'));
        }

        $visi = $this->visiRepository->update($request->all(), $id);

        Flash::success('Visi updated successfully.');

        return redirect(route('visis.index'));
    }

    /**
     * Remove the specified Visi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visi = $this->visiRepository->find($id);

        if (empty($visi)) {
            Flash::error('Visi not found');

            return redirect(route('visis.index'));
        }

        $this->visiRepository->delete($id);

        Flash::success('Visi deleted successfully.');

        return redirect(route('visis.index'));
    }
}
