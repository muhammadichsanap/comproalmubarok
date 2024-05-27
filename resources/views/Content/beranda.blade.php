@extends('layouts.layout')
@include('Component.navbar')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>

<div class="image1">
    <img src="/images/school.jpg" class="full-screen-image" alt="Logo">
</div>

<div class="container w-60">
    <div class="text-overlay">SDIT AL MUBAROKAH
        <div class="grid-container">
            <div class="grid-item justify-content-center">Visi
                <div class="subtitle2">
                    {{ $visi->first()->visi }}
                </div>
            </div>
            <div class="grid-item">Misi
                <div class="subtitle2">
                    @foreach ($misi as $index => $item)
                        <p>{{ $index + 1 }}. {{ $item->misi }}</p>
                    @endforeach
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
                    $sortedKegiatans = $kegiatans->sortByDesc('updated_at')->take(3);
                @endphp
                @foreach ($sortedKegiatans as $kegiatan)
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ $kegiatan->link_url }}" target="_blank">
                                        <img src="{{ asset('images/' . $kegiatan->gambar) }}"
                                            class="img-fluid rounded-start" alt="{{ $kegiatan->nama_kegiatan }}">
                                    </a>
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
                @foreach ($ekstrakulikuler as $ekstrakulikuler)
                    <div class="col">
                        <div class="ex-card p-3">{{ $ekstrakulikuler->nama_ekstrakulikuler }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-center mb-5">
            <p class="d-inline-flex gap-1">
                <a href="/ekstrakulikuler" class="btn active" role="button" aria-pressed="true">SELENGKAPNYA</a>
            </p>
        </div>
    </div>
</div>


<div class="kegiatan mt-5 mb-5">
    <div class="title2" style="text-align: center;">
        <h1>Prestasi</h1>
    </div>
    <div class="mt-5 d-flex justify-content-center">
        <div class="row justify-content-center">
            {{-- @php
                    $sortedPrestasis = $prestasis->sortByDesc('updated_at')->take(3);
            @endphp --}}
            @foreach ($prestasis as $prestasi)
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $prestasi->gambar) }}" class="img-fluid rounded-start"
                                    alt="{{ $prestasi->nama_siswa }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="title-prestasi card-text">{{ $prestasi->prestasi }}</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated
                                            {{ $prestasi->created_at->diffForHumans() }}</small></p>
                                    <hr>
                                    <h5 class="title-prestasi2 card-title">{{ $prestasi->nama_siswa }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                @foreach ($tendiks as $key => $tendik)
                    <div class="card m-1" style="width: 12rem;">
                        <img src="{{ asset('images/' . $tendik->gambar) }}" class="img-fluid rounded-start"
                            alt="{{ $tendik->nama_pendidik }}">
                        <div class="tendik-card card-body">
                            <h5 class="card-title text-center">{{ $tendik->nama_pendidik }}</h5>
                            <p class="card-text text-center">{{ $tendik->jabatan_pendidik }}</p>
                        </div>
                    </div>
                    @if (($key + 1) % 3 == 0)
            </div>
            <div class="mt-5 d-flex justify-content-center">
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5 d-flex justify-content-center">
        <p class="d-inline-flex gap-1">
            <a href="/tendik" class="btn active" role="button" aria-pressed="true">TAMPILKAN SEMUA TENDIK</a>
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
                @foreach ($fasilitas as $item)
                    <div class="col">
                        <div class="fasil-card p-3">
                            <div>{{ $item->nama_fasilitas }}</div>
                            <div>{{ $item->jumlah_fasilitas }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <p class="d-inline-flex gap-1">
                <a href="/fasilitasSekolah" class="btn active" role="button" aria-pressed="true">TAMPILKAN SEMUA
                    FASILITAS</a>
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
    <div class="container">
        <div style="text-align: center;">
            <h1>Peta Penyebaran Murid</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div id="map" style="height: 500px; width: 800px;">
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">© 2023 SDIT AL MUBAROKAH. All rights reserved.</span>
    </div>
</footer>

</div>
<script>
    var map = L.map('map').setView([-6.914744, 107.609810], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var heatData = [
        @foreach ($siswas as $siswa)
            [{{ $siswa->latitude }}, {{ $siswa->longitude }}, {{ $siswa->total }}],
        @endforeach
    ];

    L.heatLayer(heatData, {
        radius: 30,
        blur: 15,
        maxZoom: 17,
        gradient: {
            0.1: 'blue',
            0.3: 'lime',
            0.5: 'yellow',
            0.7: 'orange',
            1.0: 'red'
        }
    }).addTo(map);

    @foreach ($siswas as $siswa)
        var marker = L.marker([{{ $siswa->latitude }}, {{ $siswa->longitude }}])
            .addTo(map)
            .bindPopup("Kecamatan: {{ $siswa->kecamatan }}<br>Jumlah Siswa: {{ $siswa->total }}", {
                autoPan: false
            });

        marker.on('mouseover', function(e) {
            this.openPopup();
        });

        marker.on('mouseout', function(e) {
            this.closePopup();
        });

        marker.on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
    @endforeach

    map.on('click', function(e) {
        e.preventDefault();
        e.originalEvent.stopPropagation();
    });
</script>
</div>
