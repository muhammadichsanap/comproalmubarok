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
use Illuminate\Support\Facades\DB;
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
            $prestasis = Prestasi::all();
            $tendiks = Tendik::take(6)->get();
            $programs = Program::all();
            $fasilitas = Fasilitas::take(8)->get();
            $siswas = Siswa::select('kecamatan', DB::raw('count(*) as total'))
            ->groupBy('kecamatan')
            ->get();

            
            $siswas->map(function ($siswa) {
            $siswa->latitude = $this->getLatitude($siswa->kecamatan);
            $siswa->longitude = $this->getLongitude($siswa->kecamatan);
            return $siswa;
            });

            return view('Content.beranda', ['kegiatans' => $kegiatans, 'ekstrakulikuler' => $ekstrakulikuler, 'prestasis' => $prestasis, 'tendiks' => $tendiks, 'fasilitas' => $fasilitas, 'programs' => $programs, 'siswas' => $siswas, 'visi' => $visi, 'misi' => $misi, 'tentang' => $tentang]);
    }

    private function getLatitude($kecamatan)
    {
        $coordinates = [
            'Rancaekek' => -6.9503,
            'Jatinangor' => -6.9333,
            'Regol' => -6.9500,
            'Mandalajati' => -6.9039,
            'Cimaung'=> -7.0784,
            'Sumedang Selatan' => -6.8591, 
        ];

        return $coordinates[$kecamatan] ?? 0;
    }

    private function getLongitude($kecamatan)
    {
        $coordinates = [
            'Rancaekek' => 107.7503,
            'Jatinangor' => 107.7667,
            'Regol' => 107.6000,
            'Mandalajati' => 107.6777,
            'Cimaung' => 107.5640,
            'Sumedang Selatan' => 107.9203, 
        ];

        return $coordinates[$kecamatan] ?? 0;
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
}
