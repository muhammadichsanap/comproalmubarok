@extends('layouts.layout')
@include('Component.navbar')

<div class="container w-60">
    <div class="kegiatan mt-5 mb-5">
        <div class="title" style="text-align: center;">
            <h1 class="big-title">RINCIAN BIAYA</h1>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div class="profil-card mb-3">
                <div class="card card-body p-5">
                    <div>
                        <h5 class="title-profil card-title">RINCIAN BIAYA</h5>
                        <p></p>
                        <p>Dibawah ini adalah rincian persyaratan dan biaya SDIT AL - Mubarokah :</p>
                        <hr class="line-profil">
                        <p></p>
                        <p class="card-title">PERSYARATAN</p>
                        <p></p>
                        @foreach ($persyaratan as $index => $persyaratan)
                            @if ($index == 1)
                                <p class="card-text">
                                    <a href="https://docs.google.com/document/d/1Htwn5YCJgNv2CvmpjsRcPOUc-iHg7aa0untC9e0FuH0/edit" target="_blank">
                                        {{ $persyaratan->syarat }}
                                    </a>
                                </p>
                            @else
                                <p class="card-text highlight-text">{{ $persyaratan->syarat }}</p>
                            @endif
                        @endforeach
                    </div>
                    <hr class="line-profil">
                    <div>
                        <h5 class="card-title orange-text">BIAYA</h5>
                        @foreach ($harga as $harga)
                            <p class="split-para">Pengembangan
                                <span>Rp{{ number_format($harga->pengembangan, 0, ',', '.') }}</p></span>
                            <p class="split-para">Pemeliharaan Gedung
                                <span>Rp{{ number_format($harga->pemeliharaan_gedung, 0, ',', '.') }}</p></span>
                            <p class="split-para">Peningkatan Mutu
                                <span>Rp{{ number_format($harga->peningkatan_mutu, 0, ',', '.') }}</p></span>
                            <p class="split-para">Kegiatan Belajar
                                <span>Rp{{ number_format($harga->kegiatan_belajar, 0, ',', '.') }}</p></span>
                            <p class="split-para">Buku Paket
                                <span>Rp{{ number_format($harga->buku_paket, 0, ',', '.') }}</p></span>
                            <p class="split-para">Seragam Putra
                                <span>Rp{{ number_format($harga->seragam_putra, 0, ',', '.') }}</p></span>
                            <p class="split-para">Seragam Putri
                                <span>Rp{{ number_format($harga->seragam_putri, 0, ',', '.') }}</p></span>
                            <p class="split-para">SPP <span>Rp{{ number_format($harga->spp, 0, ',', '.') }}</p></span>
                            <hr class="line-profil">
                            <p class="split-para total">Total Putra
                                <span>Rp{{ number_format($harga->total_putra, 0, ',', '.') }}</p></span>
                            <p class="split-para total">Total Putri
                                <span>Rp{{ number_format($harga->total_putri, 0, ',', '.') }}</p></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
