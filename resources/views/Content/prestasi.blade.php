@extends('layouts.layout')
@include('Component.navbar')

<div class="container w-60">
    <div class="kegiatan mt-5 mb-5">
        <div class="title" style="text-align: center;">
            <h1 class="big-title">PRESTASI</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div class="row justify-content-center">
                @foreach ($prestasis as $prestasi)
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $prestasi->gambar) }}"
                                        class="img-fluid rounded-start" alt="{{ $prestasi->nama_siswa }}">
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
</div>
