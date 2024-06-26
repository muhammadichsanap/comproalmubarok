<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Repositories\KegiatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class KegiatanController extends AppBaseController
{
    /** @var KegiatanRepository $kegiatanRepository*/
    private $kegiatanRepository;

    public function __construct(KegiatanRepository $kegiatanRepo)
    {
        $this->kegiatanRepository = $kegiatanRepo;
    }

    /**
     * Display a listing of the Kegiatan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $kegiatans = $this->kegiatanRepository->paginate(10);

        return view('kegiatans.index')
            ->with('kegiatans', $kegiatans);
    }

    /**
     * Show the form for creating a new Kegiatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('kegiatans.create');
    }

    /**
     * Store a newly created Kegiatan in storage.
     *
     * @param CreateKegiatanRequest $request
     *
     * @return Response
     */
    public function store(CreateKegiatanRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
                Flash::error('Gambar harus berupa gambar dengan ekstensi PNG,JPG atau JPEG');
                return redirect()->back();
            }

            $imageName = time() . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $input['gambar'] = $imageName;
        }

        $tendik = $this->kegiatanRepository->create($input);

        Flash::success('Kegiatan berhasil disimpan');

        return redirect(route('kegiatans.index'));
    }

    /**
     * Display the specified Kegiatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kegiatan = $this->kegiatanRepository->find($id);

        if (empty($kegiatan)) {
            Flash::error('Kegiatan not found');

            return redirect(route('kegiatans.index'));
        }

        return view('kegiatans.show')->with('kegiatan', $kegiatan);
    }

    /**
     * Show the form for editing the specified Kegiatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kegiatan = $this->kegiatanRepository->find($id);

        if (empty($kegiatan)) {
            Flash::error('Kegiatan not found');

            return redirect(route('kegiatans.index'));
        }

        return view('kegiatans.edit')->with('kegiatan', $kegiatan);
    }

    /**
     * Update the specified Kegiatan in storage.
     *
     * @param int $id
     * @param UpdateKegiatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKegiatanRequest $request)
    {
        $kegiatan = $this->kegiatanRepository->find($id);

        if (empty($kegiatan)) {
            Flash::error('Kegiatan not found');

            return redirect(route('kegiatans.index'));
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

        $this->kegiatanRepository->update($input, $id);

        Flash::success('Kegiatan updated successfully');

        return redirect(route('kegiatans.index'));
    }

    /**
     * Remove the specified Kegiatan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kegiatan = $this->kegiatanRepository->find($id);

        if (empty($kegiatan)) {
            Flash::error('Kegiatan not found');

            return redirect(route('kegiatans.index'));
        }

        $this->kegiatanRepository->delete($id);

        Flash::success('Kegiatan deleted successfully.');

        return redirect(route('kegiatans.index'));
    }
}
