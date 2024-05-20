@extends('layouts.layout')
@include('Component.navbar')

<div class="image1">
    <img src="/images/v267_2416.png" class="full-screen-image" alt="Logo">
</div>

<div class="container w-60">
    <div class="text-overlay">SDIT AL MUBAROKAH
        <div class="grid-container">
            <div class="grid-item justify-content-center">Visi
                <div class="subtitle2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ab.
                    Odit rerum consequatur harum quisquam ducimus eum sunt.
                </div>
            </div>
            <div class="grid-item">Misi
                <div class="subtitle2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ab.
                    Odit rerum consequatur harum quisquam ducimus eum sunt.
                </div>
            </div>
        </div>
    </div>

    <div class="kegiatan mt-5 mb-5">
        <div style="text-align: center;">
            <h1>Kegiatan</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div class="row justify-content-center">
                @php
                    $sortedKegiatans = $kegiatans->sortBy('updated_at')->take(3);
                @endphp
                @foreach ($sortedKegiatans as $kegiatan)
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $kegiatan->gambar) }}" class="img-fluid rounded-start"
                                        alt="{{ $kegiatan->nama_kegiatan }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="title-prestasi card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                                        <p class="card-text">{{ $kegiatan->keterangan }}</p>
                                        <div class="card-bottom">
                                            <hr>
                                            <p><small class="text-body-secondary">Last updated
                                                    {{ $kegiatan->updated_at->diffForHumans() }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <p class="d-inline-flex gap-1">
                <a href="/kegiatan" class="btn active" role="button" aria-pressed="true">TAMPILKAN SEMUA KEGIATAN</a>
            </p>
        </div>
    </div>

    {{-- <div class="mt-5">
            <div style="text-align: center;">
                <h1>Ekstrakulikuler</h1>
            </div>
            <div class="mt-5">
                @php
                    $sortedEkstrakulikuler = $ekstrakulikuler->sortBy('created_at')->take(3);
                @endphp
                @foreach ($sortedEkstrakulikuler as $item)
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title orange-text">{{ $item->nama_ekstrakulikuler }}</p>
                                <p class="card-text">{{ $item->keterangan_fasilitas }}</p>
                                <div class="card-bottom">
                                    <hr>
                                    <img src="{{ asset('images/'.$item->gambar) }}" alt="Gambar Ekstrakulikuler" style="max-width: 250px;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <p class="d-inline-flex gap-1">
                <a href="/kegiatan" class="btn active" role="button" aria-pressed="true">SELENGKAPNYA</a>
            </p>
        </div> --}}
        <div class="xtra-outer-container">
            <div class="xtra-inner-container">
                <div class="xtra container-fluid mt-5">
                    <div class="title2" style="text-align: center;">
                        <h1>Ekstrakulikuler</h1>
                    </div>
                    <div class="row-ex row row-cols-2 row-cols-lg-4 g-2 g-lg-3 mt-5">
                        <div class="col">
                            <div class="ex-card p-3">Karate</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Taekwondo</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Menari</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Marawis</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Bahasa Inggris</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Pencak Silat</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Melukis</div>
                        </div>
                        <div class="col">
                            <div class="ex-card p-3">Rohis</div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center mb-5">
                    <p class="d-inline-flex gap-1">
                        <a href="/kegiatan" class="btn active" role="button" aria-pressed="true">SELENGKAPNYA</a>
                    </p>
                </div>
            </div>
        </div>
    

    {{-- <div class="mt-5">
        <div style="text-align: center;">
            <h1>PRESTASI</h1>
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <div class="row justify-content-center">
                @foreach ($prestasis as $prestasi)
                    <div class="col-md-12 mb-3">
                        <div class="card" style="max-width: 750px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $prestasi->gambar) }}"
                                        class="img-fluid rounded-start" alt="{{ $prestasi->nama_siswa }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $prestasi->nama_siswa }}</h5>
                                        <p class="card-text">{{ $prestasi->prestasi }}</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated
                                                {{ $prestasi->created_at->diffForHumans() }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div class="tendik-outer-container mb-5">
        <div class="tendik mt-5">
            <div style="text-align: center;">
                <h1>Tenaga Pendidik</h1>
            </div>
            <div class="container">
                <div class="mt-5 d-flex justify-content-center">
                    @foreach($tendiks as $key => $tendik)
                        <div class="card m-1" style="width: 12rem;">
                            <img src="{{ asset('images/'.$tendik->gambar) }}" class="img-fluid rounded-start" alt="{{ $tendik->nama_pendidik}}">
                            <div class="tendik-card card-body">
                                <h5 class="card-title text-center">{{ $tendik->nama_pendidik }}</h5>
                                <p class="card-text text-center">{{ $tendik->jabatan_pendidik }}</p>
                            </div>
                        </div>
                        @if(($key + 1) % 3 == 0)
                            </div>
                            <div class="mt-5 d-flex justify-content-center">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <p class="d-inline-flex gap-1">
                <a href="/kegiatan" class="btn active" role="button" aria-pressed="true">TAMPILKAN SEMUA TENDIK</a>
            </p>
        </div>
    </div>
    


    <div class="fasilitas-outer-container">
        <div class="fasilitas-inner-container">
            <div class="fasilitas pb-5">
                <div class="title2" style="text-align: center;">
                    <h1>Fasilitas</h1>
                </div>
                <div class="row-ex row row-cols-2 row-cols-lg-4 g-2 g-lg-3 mt-5">
                    <div class="col">
                        <div class="fasil-card p-3">Masjid</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Ruang Belajar</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Perpustakaan</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Lapangan</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Laboratorium</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Kantin</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Kamar Mandi</div>
                    </div>
                    <div class="col">
                        <div class="fasil-card p-3">Aula</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <p class="d-inline-flex gap-1">
                    <a href="/kegiatan" class="btn active" role="button" aria-pressed="true">TAMPILKAN SEMUA FASILITAS</a>
                </p>
            </div>
        </div>
    </div>

    {{-- <div class="fasilitas pb-5">
        <div class="title" style="text-align: center;">
            <h1>Fasilitas</h1>
        </div>
        <div class="row-ex row row-cols-2 row-cols-lg-4 g-2 g-lg-3 mt-5">
            <div class="col">
                <div class="fasil-card p-3">Masjid</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Ruang Belajar</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Perpustakaan</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Lapangan</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Laboratorium</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Kantin</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Kamar Mandi</div>
            </div>
            <div class="col">
                <div class="fasil-card p-3">Aula</div>
            </div>
        </div>
    </div> --}}

    <div class="sebar-outer-container mt-5">
        <div style="text-align: center;">
            <h1>Penyebaran Murid</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Jumlah Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->kelurahan }}</td>
                            <td>{{ $siswa->kecamatan }}</td>
                            <td>{{ $siswa->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

</div>
