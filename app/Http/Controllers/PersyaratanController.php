<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersyaratanRequest;
use App\Http\Requests\UpdatePersyaratanRequest;
use App\Repositories\PersyaratanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PersyaratanController extends AppBaseController
{
    /** @var PersyaratanRepository $persyaratanRepository*/
    private $persyaratanRepository;

    public function __construct(PersyaratanRepository $persyaratanRepo)
    {
        $this->persyaratanRepository = $persyaratanRepo;
    }

    /**
     * Display a listing of the Persyaratan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $persyaratans = $this->persyaratanRepository->paginate(10);

        return view('persyaratans.index')
            ->with('persyaratans', $persyaratans);
    }

    /**
     * Show the form for creating a new Persyaratan.
     *
     * @return Response
     */
    public function create()
    {
        return view('persyaratans.create');
    }

    /**
     * Store a newly created Persyaratan in storage.
     *
     * @param CreatePersyaratanRequest $request
     *
     * @return Response
     */
    public function store(CreatePersyaratanRequest $request)
    {
        $input = $request->all();

        $persyaratan = $this->persyaratanRepository->create($input);

        Flash::success('Persyaratan saved successfully.');

        return redirect(route('persyaratans.index'));
    }

    /**
     * Display the specified Persyaratan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persyaratan = $this->persyaratanRepository->find($id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratans.index'));
        }

        return view('persyaratans.show')->with('persyaratan', $persyaratan);
    }

    /**
     * Show the form for editing the specified Persyaratan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persyaratan = $this->persyaratanRepository->find($id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratans.index'));
        }

        return view('persyaratans.edit')->with('persyaratan', $persyaratan);
    }

    /**
     * Update the specified Persyaratan in storage.
     *
     * @param int $id
     * @param UpdatePersyaratanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersyaratanRequest $request)
    {
        $persyaratan = $this->persyaratanRepository->find($id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratans.index'));
        }

        $persyaratan = $this->persyaratanRepository->update($request->all(), $id);

        Flash::success('Persyaratan updated successfully.');

        return redirect(route('persyaratans.index'));
    }

    /**
     * Remove the specified Persyaratan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persyaratan = $this->persyaratanRepository->find($id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratans.index'));
        }

        $this->persyaratanRepository->delete($id);

        Flash::success('Persyaratan deleted successfully.');

        return redirect(route('persyaratans.index'));
    }
}
