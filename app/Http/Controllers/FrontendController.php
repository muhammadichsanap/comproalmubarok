<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\Harga;
use App\Models\Kegiatan;
use App\Models\Persyaratan;
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
            'kegiatans' => Kegiatan::all(),
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
        $kegiatans = Kegiatan::orderBy('created_at', 'desc')->take(4)->get(); 
        return view('layouts.footer', ['programs' => $programs, 'kegiatans' => $kegiatans]);
    }

    public function profilsekolah()
    {
        $programs = Program::all();
        $visiMisi = Visi_misi::first();
        $kegiatans = Kegiatan::all();
        return view('frontend.profilsekolah', ['programs' => $programs, 'visiMisi' => $visiMisi, 'kegiatans' => $kegiatans]);
    }

    public function keuangan()
    {
        $harga = Harga::all();
        $persyaratan = Persyaratan::all();
        return view('frontend.keuangan', ['harga' => $harga, 'persyaratan' => $persyaratan]);
    }

    public function ekstrakulikuler()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('frontend.ekstrakulikuler', ['ekstrakulikuler' => $ekstrakulikuler]);
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::all();

        return view('frontend.kegiatan', ['kegiatans' => $kegiatans]);
    }

    public function ekstrakurikuler()
    {
        return view('frontend.ekstrakurikuler');
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all(); 

        return view('frontend.prestasi', ['prestasis' => $prestasis]);
    }

    public function tendik()
    {
        $tendiks = Tendik::all();

        return view('frontend.tendik', ['tendiks' => $tendiks]);
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();

        return view('frontend.fasilitas', ['fasilitas' => $fasilitas]);
    }
}
