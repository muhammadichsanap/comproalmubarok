<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;
use App\Repositories\AlumniRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AlumniController extends AppBaseController
{
    /** @var AlumniRepository $alumniRepository*/
    private $alumniRepository;

    public function __construct(AlumniRepository $alumniRepo)
    {
        $this->alumniRepository = $alumniRepo;
    }

    /**
     * Display a listing of the Alumni.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alumnis = $this->alumniRepository->paginate(10);

        return view('alumnis.index')
            ->with('alumnis', $alumnis);
    }

    /**
     * Show the form for creating a new Alumni.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnis.create');
    }

    /**
     * Store a newly created Alumni in storage.
     *
     * @param CreateAlumniRequest $request
     *
     * @return Response
     */
    public function store(CreateAlumniRequest $request)
    {
        $input = $request->all();

        $alumni = $this->alumniRepository->create($input);

        Flash::success('Alumni saved successfully.');

        return redirect(route('alumnis.index'));
    }

    /**
     * Display the specified Alumni.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alumni = $this->alumniRepository->find($id);

        if (empty($alumni)) {
            Flash::error('Alumni not found');

            return redirect(route('alumnis.index'));
        }

        return view('alumnis.show')->with('alumni', $alumni);
    }

    /**
     * Show the form for editing the specified Alumni.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alumni = $this->alumniRepository->find($id);

        if (empty($alumni)) {
            Flash::error('Alumni not found');

            return redirect(route('alumnis.index'));
        }

        return view('alumnis.edit')->with('alumni', $alumni);
    }

    /**
     * Update the specified Alumni in storage.
     *
     * @param int $id
     * @param UpdateAlumniRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlumniRequest $request)
    {
        $alumni = $this->alumniRepository->find($id);

        if (empty($alumni)) {
            Flash::error('Alumni not found');

            return redirect(route('alumnis.index'));
        }

        $alumni = $this->alumniRepository->update($request->all(), $id);

        Flash::success('Alumni updated successfully.');

        return redirect(route('alumnis.index'));
    }

    /**
     * Remove the specified Alumni from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alumni = $this->alumniRepository->find($id);

        if (empty($alumni)) {
            Flash::error('Alumni not found');

            return redirect(route('alumnis.index'));
        }

        $this->alumniRepository->delete($id);

        Flash::success('Alumni deleted successfully.');

        return redirect(route('alumnis.index'));
    }
}
