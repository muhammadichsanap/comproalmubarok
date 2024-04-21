<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\Harga;
use App\Models\Kegiatan;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\Tendik;
use App\Models\User;
use App\Models\Video;
use App\Models\Visi_misi;
use Laracasts\Flash\Flash;

class FrontendController extends Controller
{

    public function index()
    {
        $data = [
            'alumnis' => Alumni::all(),
            'ekstrakulikulers' => Ekstrakulikuler::all(),
            'fasilitas' => Fasilitas::all(),
            'hargas' => Harga::all(),
            'kegiatans' => Kegiatan::all(),
            'prestasis' => Prestasi::all(),
            'programs' => Program::all(),
            'sekolahs' => Sekolah::all(),
            'siswas' => Siswa::all(),
            'tendiks' => Tendik::all(),
            'users' => User::all(),
            'videos' => Video::all(),
            'visiMisis' => Visi_misi::all()
        ];

        return view('frontend.home', $data);
    }

    public function header()
    {
        return view('layouts.header');
    }

    public function footer()
    {
        $programs = Program::all();
        $kegiatans = Kegiatan::all();
        return view('layouts.footer', ['programs' => $programs, 'kegiatans' => $kegiatans]);
    }

}
