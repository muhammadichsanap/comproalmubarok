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
                        @foreach ($tentang as $tentang)
                            <p class="card-text">{{ $tentang->tentang }}</p>
                        @endforeach
                        <hr class="line-profil">
                    </div>
                </div>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <div class="profil-card mb-3">
                    <div class="card card-body p-5">
                        <h5 class="title-profil card-title orange-text">Visi</h5>
                        <p class="title-profil-text card-text">{{ $visi->visi }}</p> 
                        <h5 class="title-profil card-title orange-text">Misi</h5>
                        @foreach ($misi as $index => $item)
                            <p class="title-profil-text card-text">{{ $index + 1 }}. {{ $item->misi }} </p> 
                        @endforeach
                        <hr class="line-profil">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection