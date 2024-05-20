@extends('layouts.layout')
@include('Component.navbar')

<div class="container w-60">
    <div class="kegiatan mt-5 mb-5">
        <div class="title" style="text-align: center;">
            <h1 class="big-title">FASILITAS</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="mt-3 d-flex flex-column align-items-center">
                    @foreach ($fasilitas as $fasilitas)
                        <div class="card card-body mb-3 p-5">
                            <div class="baris-fasil row g-0">
                                <div class="col-md-4">
                                    <div class="fasil-card2 card-body p-5">
                                        <h5 class="card-text">{{ $fasilitas->jumlah_fasilitas }}</h5>
                                        <h5 class="card-text">{{ $fasilitas->nama_fasilitas }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="fasil-content card-body">
                                        <p class="card-text">{{ $fasilitas->keterangan_fasilitas }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <!-- Add a line break after each data entry -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
