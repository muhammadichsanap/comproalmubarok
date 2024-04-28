<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEkstrakulikulerRequest;
use App\Http\Requests\UpdateEkstrakulikulerRequest;
use App\Repositories\EkstrakulikulerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class EkstrakulikulerController extends AppBaseController
{
    /** @var EkstrakulikulerRepository $ekstrakulikulerRepository*/
    private $ekstrakulikulerRepository;

    public function __construct(EkstrakulikulerRepository $ekstrakulikulerRepo)
    {
        $this->ekstrakulikulerRepository = $ekstrakulikulerRepo;
    }

    /**
     * Display a listing of the Ekstrakulikuler.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ekstrakulikulers = $this->ekstrakulikulerRepository->paginate(10);

        return view('ekstrakulikulers.index')
            ->with('ekstrakulikulers', $ekstrakulikulers);
    }

    /**
     * Show the form for creating a new Ekstrakulikuler.
     *
     * @return Response
     */
    public function create()
    {
        return view('ekstrakulikulers.create');
    }

    /**
     * Store a newly created Ekstrakulikuler in storage.
     *
     * @param CreateEkstrakulikulerRequest $request
     *
     * @return Response
     */
    public function store(CreateEkstrakulikulerRequest $request)
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
    
        $ekstrakulikuler = $this->ekstrakulikulerRepository->create($input);
    
        Flash::success('Ekstrakulikuler berhasil disimpan.');
    
        return redirect(route('ekstrakulikulers.index'));
    }

    /**
     * Display the specified Ekstrakulikuler.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ekstrakulikuler = $this->ekstrakulikulerRepository->find($id);

        if (empty($ekstrakulikuler)) {
            Flash::error('Ekstrakulikuler not found');

            return redirect(route('ekstrakulikulers.index'));
        }

        return view('ekstrakulikulers.show')->with('ekstrakulikuler', $ekstrakulikuler);
    }

    /**
     * Show the form for editing the specified Ekstrakulikuler.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ekstrakulikuler = $this->ekstrakulikulerRepository->find($id);

        if (empty($ekstrakulikuler)) {
            Flash::error('Ekstrakulikuler not found');

            return redirect(route('ekstrakulikulers.index'));
        }

        return view('ekstrakulikulers.edit')->with('ekstrakulikuler', $ekstrakulikuler);
    }

    /**
     * Update the specified Ekstrakulikuler in storage.
     *
     * @param int $id
     * @param UpdateEkstrakulikulerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEkstrakulikulerRequest $request)
    {
        $ekstrakulikuler = $this->ekstrakulikulerRepository->find($id);
    
        if (empty($ekstrakulikuler)) {
            Flash::error('ekstrakulikuler not found');
            return redirect(route('ekstrakulikuler.index'));
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
    
        $this->ekstrakulikulerRepository->update($input, $id);
    
        Flash::success('Ekstrakulikuler berhasil diperbarui.');
    
        return redirect(route('ekstrakulikulers.index'));
    }

    /**
     * Remove the specified Ekstrakulikuler from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ekstrakulikuler = $this->ekstrakulikulerRepository->find($id);

        if (empty($ekstrakulikuler)) {
            Flash::error('Ekstrakulikuler not found');

            return redirect(route('ekstrakulikulers.index'));
        }

        $this->ekstrakulikulerRepository->delete($id);

        Flash::success('Ekstrakulikuler deleted successfully.');

        return redirect(route('ekstrakulikulers.index'));
    }
}
