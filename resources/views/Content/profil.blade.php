@extends('layouts.layout')

@section('content')
    @include('Component.navbar')
    <div class="container w-60">
        <div class="mt-5">
            <div class="title" style="text-align: center;">
                <h1 class="big-title">SDIT AL-MUBAROKAH</h1>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <div class="profil-card mb-3">
                    <div class="card card-body p-5">
                        <h5 class="title-profil card-title orange-text">TENTANG</h5>
                        @foreach ($programs as $program)
                            <p class="card-text">{{ $program->nama_program }}</p>
                        @endforeach
                        <hr class="line-profil">
                    </div>
                </div>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <div class="profil-card mb-3">
                    <div class="card card-body p-5">
                        <h5 class="title-profil card-title orange-text">VISI</h5>
                        <p class="title-profil-text card-text">{{ $visiMisi->visi }}</p>
                        <h5 class="title-profil card-title orange-text">MISI</h5>
                        <p class="title-profil-text card-text">{{ $visiMisi->misi }}</p>
                        <hr class="line-profil">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
