@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Sekolah</h1>
                </div>
                <div class="col-sm-6 text-right">
                    @if ($hasSekolah)
                        <a class="btn btn-primary float-right"
                           href="{{ route('sekolahs.edit', [$sekolahs->first()->id]) }}">
                            Edit
                        </a>
                    @else
                        <a class="btn btn-primary float-right"
                           href="{{ route('sekolahs.create') }}">
                            Tambah
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('sekolahs.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $sekolahs])
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection