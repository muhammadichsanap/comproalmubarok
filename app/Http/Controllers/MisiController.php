<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMisiRequest;
use App\Http\Requests\UpdateMisiRequest;
use App\Repositories\MisiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MisiController extends AppBaseController
{
    /** @var MisiRepository $misiRepository*/
    private $misiRepository;

    public function __construct(MisiRepository $misiRepo)
    {
        $this->misiRepository = $misiRepo;
    }

    /**
     * Display a listing of the Misi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $misis = $this->misiRepository->paginate(10);

        return view('misis.index')
            ->with('misis', $misis);
    }

    /**
     * Show the form for creating a new Misi.
     *
     * @return Response
     */
    public function create()
    {
        return view('misis.create');
    }

    /**
     * Store a newly created Misi in storage.
     *
     * @param CreateMisiRequest $request
     *
     * @return Response
     */
    public function store(CreateMisiRequest $request)
    {
        $input = $request->all();

        $misi = $this->misiRepository->create($input);

        Flash::success('Misi saved successfully.');

        return redirect(route('misis.index'));
    }

    /**
     * Display the specified Misi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $misi = $this->misiRepository->find($id);

        if (empty($misi)) {
            Flash::error('Misi not found');

            return redirect(route('misis.index'));
        }

        return view('misis.show')->with('misi', $misi);
    }

    /**
     * Show the form for editing the specified Misi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $misi = $this->misiRepository->find($id);

        if (empty($misi)) {
            Flash::error('Misi not found');

            return redirect(route('misis.index'));
        }

        return view('misis.edit')->with('misi', $misi);
    }

    /**
     * Update the specified Misi in storage.
     *
     * @param int $id
     * @param UpdateMisiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMisiRequest $request)
    {
        $misi = $this->misiRepository->find($id);

        if (empty($misi)) {
            Flash::error('Misi not found');

            return redirect(route('misis.index'));
        }

        $misi = $this->misiRepository->update($request->all(), $id);

        Flash::success('Misi updated successfully.');

        return redirect(route('misis.index'));
    }

    /**
     * Remove the specified Misi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $misi = $this->misiRepository->find($id);

        if (empty($misi)) {
            Flash::error('Misi not found');

            return redirect(route('misis.index'));
        }

        $this->misiRepository->delete($id);

        Flash::success('Misi deleted successfully.');

        return redirect(route('misis.index'));
    }
}
