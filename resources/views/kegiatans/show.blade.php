@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kegiatan Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right" href="{{ route('kegiatans.index') }}">Back</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3"></div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>Nama Kegiatan: {{ $kegiatan->nama_kegiatan }}</p>
                        <p>Keterangan: {{ $kegiatan->keterangan }}</p>
                        <img src="{{ asset($kegiatan->gambar) }}" alt="Gambar Kegiatan">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
