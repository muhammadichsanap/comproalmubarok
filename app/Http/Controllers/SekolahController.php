<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSekolahRequest;
use App\Http\Requests\UpdateSekolahRequest;
use App\Repositories\SekolahRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Laracasts\Flash\Flash;
use Response;


class SekolahController extends AppBaseController
{
    /** @var SekolahRepository $sekolahRepository*/
    private $sekolahRepository;

    public function __construct(SekolahRepository $sekolahRepo)
    {
        $this->sekolahRepository = $sekolahRepo;
    }

    /**
     * Display a listing of the Sekolah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sekolahs = $this->sekolahRepository->paginate(10);
        $hasSekolah = $sekolahs->count() > 0;

        return view('sekolahs.index')
            ->with('sekolahs', $sekolahs)
            ->with('hasSekolah', $hasSekolah);
    }

    /**
     * Show the form for creating a new Sekolah.
     *
     * @return Response
     */
    public function create()
    {
        return view('sekolahs.create');
    }

    /**
     * Store a newly created Sekolah in storage.
     *
     * @param CreateSekolahRequest $request
     *
     * @return Response
     */
    public function store(CreateSekolahRequest $request)
    {
        $input = $request->all();
        
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
            
            if ($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg') {
                Flash::error('File harus berupa gambar dengan ekstensi PNG, JPG atau JPEG.');
                return redirect()->back();
            }

            $imageName = time() . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
        }

        $sekolah = $this->sekolahRepository->create($input);

        Flash::success('Sekolah saved successfully.');

        return redirect(route('sekolahs.index'));
    }

    /**
     * Display the specified Sekolah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sekolah = $this->sekolahRepository->find($id);

        if (empty($sekolah)) {
            Flash::error('Sekolah not found');

            return redirect(route('sekolahs.index'));
        }

        return view('sekolahs.show')->with('sekolah', $sekolah);
    }

    /**
     * Show the form for editing the specified Sekolah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sekolah = $this->sekolahRepository->find($id);

        if (empty($sekolah)) {
            Flash::error('Sekolah not found');

            return redirect(route('sekolahs.index'));
        }

        return view('sekolahs.edit')->with('sekolah', $sekolah);
    }

    /**
     * Update the specified Sekolah in storage.
     *
     * @param int $id
     * @param UpdateSekolahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSekolahRequest $request)
    {
        $sekolah = $this->sekolahRepository->find($id);

        if (empty($sekolah)) {
            Flash::error('Sekolah not found');
            return redirect(route('sekolahs.index'));
        }

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
            
            if ($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg') {
                Flash::error('File harus berupa gambar dengan ekstensi PNG, JPG, atau JPEG.');
                return redirect()->back();
            }

            // Hapus gambar lama jika ada
            if (file_exists(public_path('images/' . $sekolah->gambar))) {
                File::delete(public_path('images/' . $sekolah->gambar));
            }

            $imageName = time() . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
        }

        $this->sekolahRepository->update($input, $id);

        Flash::success('Sekolah updated successfully.');

        return redirect(route('sekolahs.index'));
    }

    /**
     * Remove the specified Sekolah from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sekolah = $this->sekolahRepository->find($id);

        if (empty($sekolah)) {
            Flash::error('Sekolah not found');

            return redirect(route('sekolahs.index'));
        }

        $this->sekolahRepository->delete($id);

        Flash::success('Sekolah deleted successfully.');

        return redirect(route('sekolahs.index'));
    }
}
