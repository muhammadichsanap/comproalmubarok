@extends('layouts.layout')
@include('Component.navbar')

<div class="container w-60">
    <div class="kegiatan mt-5 mb-5">
        <div class="title" style="text-align: center;">
            <h1 class="big-title">TENAGA PENDIDIK</h1>
        </div>
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
