<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;
use App\Repositories\FasilitasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class FasilitasController extends AppBaseController
{
    /** @var FasilitasRepository $fasilitasRepository*/
    private $fasilitasRepository;

    public function __construct(FasilitasRepository $fasilitasRepo)
    {
        $this->fasilitasRepository = $fasilitasRepo;
    }

    /**
     * Display a listing of the Fasilitas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fasilitas = $this->fasilitasRepository->paginate(10);

        return view('fasilitas.index')
            ->with('fasilitas', $fasilitas);
    }

    /**
     * Show the form for creating a new Fasilitas.
     *
     * @return Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created Fasilitas in storage.
     *
     * @param CreateFasilitasRequest $request
     *
     * @return Response
     */
    public function store(CreateFasilitasRequest $request)
    {
        $input = $request->all();

        $fasilitas = $this->fasilitasRepository->create($input);

        Flash::success('Fasilitas saved successfully.');

        return redirect(route('fasilitas.index'));
    }

    /**
     * Display the specified Fasilitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        return view('fasilitas.show')->with('fasilitas', $fasilitas);
    }

    /**
     * Show the form for editing the specified Fasilitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        return view('fasilitas.edit')->with('fasilitas', $fasilitas);
    }

    /**
     * Update the specified Fasilitas in storage.
     *
     * @param int $id
     * @param UpdateFasilitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFasilitasRequest $request)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        $fasilitas = $this->fasilitasRepository->update($request->all(), $id);

        Flash::success('Fasilitas updated successfully.');

        return redirect(route('fasilitas.index'));
    }

    /**
     * Remove the specified Fasilitas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        $this->fasilitasRepository->delete($id);

        Flash::success('Fasilitas deleted successfully.');

        return redirect(route('fasilitas.index'));
    }
}
