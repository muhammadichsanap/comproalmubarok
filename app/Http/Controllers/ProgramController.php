<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Repositories\ProgramRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ProgramController extends AppBaseController
{
    /** @var ProgramRepository $programRepository*/
    private $programRepository;

    public function __construct(ProgramRepository $programRepo)
    {
        $this->programRepository = $programRepo;
    }

    /**
     * Display a listing of the Program.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $programs = $this->programRepository->paginate(10);

        return view('programs.index')
            ->with('programs', $programs);
    }

    /**
     * Show the form for creating a new Program.
     *
     * @return Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created Program in storage.
     *
     * @param CreateProgramRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramRequest $request)
    {
        $input = $request->all();

        $program = $this->programRepository->create($input);

        Flash::success('Program saved successfully.');

        return redirect(route('programs.index'));
    }

    /**
     * Display the specified Program.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $program = $this->programRepository->find($id);

        if (empty($program)) {
            Flash::error('Program not found');

            return redirect(route('programs.index'));
        }

        return view('programs.show')->with('program', $program);
    }

    /**
     * Show the form for editing the specified Program.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $program = $this->programRepository->find($id);

        if (empty($program)) {
            Flash::error('Program not found');

            return redirect(route('programs.index'));
        }

        return view('programs.edit')->with('program', $program);
    }

    /**
     * Update the specified Program in storage.
     *
     * @param int $id
     * @param UpdateProgramRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramRequest $request)
    {
        $program = $this->programRepository->find($id);

        if (empty($program)) {
            Flash::error('Program not found');

            return redirect(route('programs.index'));
        }

        $program = $this->programRepository->update($request->all(), $id);

        Flash::success('Program updated successfully.');

        return redirect(route('programs.index'));
    }

    /**
     * Remove the specified Program from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $program = $this->programRepository->find($id);

        if (empty($program)) {
            Flash::error('Program not found');

            return redirect(route('programs.index'));
        }

        $this->programRepository->delete($id);

        Flash::success('Program deleted successfully.');

        return redirect(route('programs.index'));
    }
}
