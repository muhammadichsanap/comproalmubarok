@extends('layouts.layout')

@section('content')
    @include('Component.navbar')

    <div class="container w-60">
        <div class="kegiatan mt-5 mb-5">
            <div class="title" style="text-align: center;">
                <h1 class="big-title">KEGIATAN</h1>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <div class="row justify-content-center">
                    @foreach ($kegiatans as $kegiatan)
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
        </div>

    </div>
@endsection
