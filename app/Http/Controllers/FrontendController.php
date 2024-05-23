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
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Tentang;
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
            'visi' => Visi::all(),
            'misi' => Misi::all(),
            'tentang' => Tentang::all()
        ];

        return view('frontend.home', $data);
    }

    //coba

    public function navbar()
    {
        return view('Component.navbar');
    }

    public function beranda()
    {
            $visi = Visi::all();
            $misi = Misi::all();
            $tentang = Tentang::all();
            $kegiatans = Kegiatan::all();
            $ekstrakulikuler = Ekstrakulikuler::take(8)->get();
            $tendiks = Tendik::take(6)->get();
            $programs = Program::all();
            $fasilitas = Fasilitas::take(8)->get();
            $siswas = Siswa::select('kelurahan', 'kecamatan')->selectRaw('count(*) as total')->groupBy('kelurahan', 'kecamatan')->get();

            return view('Content.beranda', ['kegiatans' => $kegiatans, 'ekstrakulikuler' => $ekstrakulikuler, 'tendiks' => $tendiks, 'fasilitas' => $fasilitas, 'programs' => $programs, 'siswas' => $siswas, 'visi' => $visi, 'misi' => $misi, 'tentang' => $tentang]);
    }

    public function profil()
    {
        $programs = Program::all();
        $visi = Visi::first();
        $misi = Misi::all();
        $tentang = Tentang::all();
        return view('Content.profil', ['programs' => $programs, 'visi' => $visi, 'misi' => $misi, 'tentang' => $tentang]);
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::orderBy('updated_at', 'desc')->get();
        return view('Content.kegiatan', compact('kegiatans'));
    }

    public function keuangan()
    {
        $harga = Harga::all();
        $persyaratan = Persyaratan::all();
        return view('Content.keuangan', ['harga' => $harga, 'persyaratan' => $persyaratan]);
    }

    
    public function ekstrakulikuler()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('Content.ekstrakulikuler', ['ekstrakulikuler' => $ekstrakulikuler]);
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all(); 

        return view('Content.prestasi', ['prestasis' => $prestasis]);
    }

    public function tendik()
    {
        $tendiks = Tendik::all();

        return view('Content.tendik', ['tendiks' => $tendiks]);
    }

    public function fasilitasSekolah()
    {
        $programs = Program::all();
        $fasilitas = Fasilitas::all();

        return view('Content.fasilitasSekolah', ['fasilitas' => $fasilitas, 'programs' => $programs]);
    }


    //coba



    // public function header()
    // {
    //         $visiMisi = Visi_misi::first();
    //         $kegiatans = Kegiatan::all();
    //         $ekstrakulikuler = Ekstrakulikuler::all();
    //         $tendiks = Tendik::all();
    //         $programs = Program::all();
    //         $fasilitas = Fasilitas::all();
    //         $siswas = Siswa::select('kelurahan', 'kecamatan')->selectRaw('count(*) as total')->groupBy('kelurahan', 'kecamatan')->get();

    //         return view('layouts.header', ['visiMisi' => $visiMisi, 'kegiatans' => $kegiatans, 'ekstrakulikuler' => $ekstrakulikuler, 'tendiks' => $tendiks, 'fasilitas' => $fasilitas, 'programs' => $programs, 'siswas' => $siswas]);
    // }



    // public function profilsekolah()
    // {
    //     $programs = Program::all();
    //     $visiMisi = Visi_misi::first();
    //     $kegiatans = Kegiatan::all();
    //     return view('frontend.profilsekolah', ['programs' => $programs, 'visiMisi' => $visiMisi, 'kegiatans' => $kegiatans]);
    // }

    // public function keuanganSekolah()
    // {
    //     $harga = Harga::all();
    //     $persyaratan = Persyaratan::all();
    //     return view('frontend.keuanganSekolah', ['harga' => $harga, 'persyaratan' => $persyaratan]);
    // }

    // public function ekstrakulikulerSekolah()
    // {
    //     $ekstrakulikuler = Ekstrakulikuler::all();
    //     return view('frontend.ekstrakulikulerSekolah', ['ekstrakulikuler' => $ekstrakulikuler]);
    // }

    // public function kegiatanSekolah()
    // {
    //     $kegiatans = Kegiatan::all();

    //     return view('frontend.kegiatanSekolah', ['kegiatans' => $kegiatans]);
    // }

    // public function ekstrakurikuler()
    // {
    //     return view('frontend.ekstrakurikuler');
    // }

    // public function prestasiSekolah()
    // {
    //     $prestasis = Prestasi::all(); 

    //     return view('frontend.prestasiSekolah', ['prestasis' => $prestasis]);
    // }

    // public function tendikSekolah()
    // {
    //     $tendiks = Tendik::all();

    //     return view('frontend.tendikSekolah', ['tendiks' => $tendiks]);
    // }

    // public function fasil()
    // {
    //     $programs = Program::all();
    //     $fasilitas = Fasilitas::all();

    //     return view('frontend.fasil', ['fasilitas' => $fasilitas, 'programs' => $programs]);
    // }

        /*public function footer()
    {
        $programs = Program::all();
        $kegiatans = Kegiatan::orderBy('created_at', 'desc')->take(4)->get(); 
        return view('layouts.footer', ['programs' => $programs, 'kegiatans' => $kegiatans]);
    }*/
}
