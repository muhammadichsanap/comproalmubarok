@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Siswas</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('siswas.create') }}">
                            Add New
                        </a>
                        <a class="btn btn-success ml-2" href="{{ route('siswas.import') }}">
                            Import CSV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('siswas.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $siswas])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
