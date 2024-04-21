<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTendikRequest;
use App\Http\Requests\UpdateTendikRequest;
use App\Repositories\TendikRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class TendikController extends AppBaseController
{
    /** @var TendikRepository $tendikRepository*/
    private $tendikRepository;

    public function __construct(TendikRepository $tendikRepo)
    {
        $this->tendikRepository = $tendikRepo;
    }

    /**
     * Display a listing of the Tendik.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tendiks = $this->tendikRepository->paginate(10);

        return view('tendiks.index')
            ->with('tendiks', $tendiks);
    }

    /**
     * Show the form for creating a new Tendik.
     *
     * @return Response
     */
    public function create()
    {
        return view('tendiks.create');
    }

    /**
     * Store a newly created Tendik in storage.
     *
     * @param CreateTendikRequest $request
     *
     * @return Response
     */
    public function store(CreateTendikRequest $request)
    {
        $input = $request->all();

        $tendik = $this->tendikRepository->create($input);

        Flash::success('Tendik saved successfully.');

        return redirect(route('tendiks.index'));
    }

    /**
     * Display the specified Tendik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tendik = $this->tendikRepository->find($id);

        if (empty($tendik)) {
            Flash::error('Tendik not found');

            return redirect(route('tendiks.index'));
        }

        return view('tendiks.show')->with('tendik', $tendik);
    }

    /**
     * Show the form for editing the specified Tendik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tendik = $this->tendikRepository->find($id);

        if (empty($tendik)) {
            Flash::error('Tendik not found');

            return redirect(route('tendiks.index'));
        }

        return view('tendiks.edit')->with('tendik', $tendik);
    }

    /**
     * Update the specified Tendik in storage.
     *
     * @param int $id
     * @param UpdateTendikRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTendikRequest $request)
    {
        $tendik = $this->tendikRepository->find($id);

        if (empty($tendik)) {
            Flash::error('Tendik not found');

            return redirect(route('tendiks.index'));
        }

        $tendik = $this->tendikRepository->update($request->all(), $id);

        Flash::success('Tendik updated successfully.');

        return redirect(route('tendiks.index'));
    }

    /**
     * Remove the specified Tendik from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tendik = $this->tendikRepository->find($id);

        if (empty($tendik)) {
            Flash::error('Tendik not found');

            return redirect(route('tendiks.index'));
        }

        $this->tendikRepository->delete($id);

        Flash::success('Tendik deleted successfully.');

        return redirect(route('tendiks.index'));
    }
}
