@extends('layouts.layout')
@include('Component.navbar')

<div class="container w-60">
    <div class="kegiatan mt-5 mb-5">
        <div class="title" style="text-align: center;">
            <h1 class="big-title">EKSTRAKULIKULER</h1>
        </div>
        <div class="mt-5">
            <div class="mt-5">
                @foreach ($ekstrakulikuler as $item)
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <p class="title-profil card-title orange-text">{{ $item->nama_ekstrakulikuler }}</p>
                                <p class="card-text">{{ $item->keterangan_fasilitas }}</p>
                                <div class="card-bottom">
                                    <hr class="line-xtra">
                                    <img src="{{ asset('images/'.$item->gambar) }}" alt="Gambar Ekstrakulikuler" style="max-width: 250px;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
