@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Visi Sekolah</h1>
                </div>
                <div class="col-sm-6 text-right">
                    @if ($visis->count() > 0)
                        <a class="btn btn-primary float-right"
                           href="{{ route('visis.edit', [$visis->first()->id]) }}">
                            Edit
                        </a>
                    @else
                        <a class="btn btn-primary float-right" href="{{ route('visis.create') }}">
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
                @include('visis.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $visis])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection