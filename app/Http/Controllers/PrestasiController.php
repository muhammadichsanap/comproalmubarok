<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrestasiRequest;
use App\Http\Requests\UpdatePrestasiRequest;
use App\Repositories\PrestasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;
use Illuminate\Support\Facades\File;

class PrestasiController extends AppBaseController
{
    /** @var PrestasiRepository $prestasiRepository*/
    private $prestasiRepository;

    public function __construct(PrestasiRepository $prestasiRepo)
    {
        $this->prestasiRepository = $prestasiRepo;
    }

    /**
     * Display a listing of the Prestasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prestasis = $this->prestasiRepository->paginate(10);

        return view('prestasis.index')
            ->with('prestasis', $prestasis);
    }

    /**
     * Show the form for creating a new Prestasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('prestasis.create');
    }

    /**
     * Store a newly created Prestasi in storage.
     *
     * @param CreatePrestasiRequest $request
     *
     * @return Response
     */
    public function store(CreatePrestasiRequest $request)
    {
        $input = $request->all();
    
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
    
            if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
                Flash::error('File harus berupa gambar dengan ekstensi PNG, JPG, atau JPEG');
                return redirect()->back();
            }
    
            $imageName = time() . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
        }
    
        $prestasi = $this->prestasiRepository->create($input);
    
        Flash::success('Prestasi saved successfully.');
    
        return redirect(route('prestasis.index'));
    }

    /**
     * Display the specified Prestasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        return view('prestasis.show')->with('prestasi', $prestasi);
    }

    /**
     * Show the form for editing the specified Prestasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        return view('prestasis.edit')->with('prestasi', $prestasi);
    }

    /**
     * Update the specified Prestasi in storage.
     *
     * @param int $id
     * @param UpdatePrestasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrestasiRequest $request)
    {
        $prestasi = $this->prestasiRepository->find($id);
    
        if (empty($prestasi)) {
            Flash::error('Prestasi not found');
            return redirect(route('prestasis.index'));
        }
    
        $input = $request->all();
    
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
    
            if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
                Flash::error('File harus berupa gambar dengan ekstensi PNG, JPG, atau JPEG');
                return redirect()->back();
            }
    
            $imageName = time() . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
        }
    
        $this->prestasiRepository->update($input, $id);
    
        Flash::success('Prestasi updated successfully.');
    
        return redirect(route('prestasis.index'));
    }

    /**
     * Remove the specified Prestasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prestasi = $this->prestasiRepository->find($id);

        if (empty($prestasi)) {
            Flash::error('Prestasi not found');

            return redirect(route('prestasis.index'));
        }

        $this->prestasiRepository->delete($id);

        Flash::success('Prestasi deleted successfully.');

        return redirect(route('prestasis.index'));
    }
}
