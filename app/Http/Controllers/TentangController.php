<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTentangRequest;
use App\Http\Requests\UpdateTentangRequest;
use App\Repositories\TentangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Laracasts\Flash\Flash;
use Response;

class TentangController extends AppBaseController
{
    /** @var TentangRepository $tentangRepository*/
    private $tentangRepository;

    public function __construct(TentangRepository $tentangRepo)
    {
        $this->tentangRepository = $tentangRepo;
    }

    /**
     * Display a listing of the Tentang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tentangs = $this->tentangRepository->paginate(10);
        $hasTentang = $tentangs->count() > 0;

        return view('tentangs.index')
            ->with('tentangs', $tentangs)
            ->with('hasTentang', $hasTentang);
    }

    /**
     * Show the form for creating a new Tentang.
     *
     * @return Response
     */
    public function create()
    {
        return view('tentangs.create');
    }

    /**
     * Store a newly created Tentang in storage.
     *
     * @param CreateTentangRequest $request
     *
     * @return Response
     */
    public function store(CreateTentangRequest $request)
    {
        $input = $request->all();

        $tentang = $this->tentangRepository->create($input);

        Flash::success('Tentang saved successfully.');

        return redirect(route('tentangs.index'));
    }

    /**
     * Display the specified Tentang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tentang = $this->tentangRepository->find($id);

        if (empty($tentang)) {
            Flash::error('Tentang not found');

            return redirect(route('tentangs.index'));
        }

        return view('tentangs.show')->with('tentang', $tentang);
    }

    /**
     * Show the form for editing the specified Tentang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tentang = $this->tentangRepository->find($id);

        if (empty($tentang)) {
            Flash::error('Tentang not found');

            return redirect(route('tentangs.index'));
        }

        return view('tentangs.edit')->with('tentang', $tentang);
    }

    /**
     * Update the specified Tentang in storage.
     *
     * @param int $id
     * @param UpdateTentangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTentangRequest $request)
    {
        $tentang = $this->tentangRepository->find($id);

        if (empty($tentang)) {
            Flash::error('Tentang not found');

            return redirect(route('tentangs.index'));
        }

        $tentang = $this->tentangRepository->update($request->all(), $id);

        Flash::success('Tentang updated successfully.');

        return redirect(route('tentangs.index'));
    }

    /**
     * Remove the specified Tentang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tentang = $this->tentangRepository->find($id);

        if (empty($tentang)) {
            Flash::error('Tentang not found');

            return redirect(route('tentangs.index'));
        }

        $this->tentangRepository->delete($id);

        Flash::success('Tentang deleted successfully.');

        return redirect(route('tentangs.index'));
    }
}
