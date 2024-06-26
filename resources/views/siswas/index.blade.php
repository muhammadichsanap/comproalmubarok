@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-right">
                        <form action="{{ route('siswas.deleteAll') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all data?')">
                                Hapus Semua Data
                            </button>
                        </form>
                        <a class="btn btn-primary" href="{{ route('siswas.create') }}">
                            Tambah
                        </a>
                        @if($siswas->isNotEmpty())
                            <a href="{{ route('siswas.exportexcel') }}" class="btn btn-info">
                                Export CSV
                            </a>
                        @else
                            <button class="btn btn-info" onclick="alert('Tidak ada data untuk diekspor.');">
                                Export CSV
                            </button>
                        @endif
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#importCsvModal">
                            Import CSV
                        </button>
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

    <!-- Modal Import CSV -->
    <div class="modal fade" id="importCsvModal" tabindex="-1" role="dialog" aria-labelledby="importCsvModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importCsvModalLabel">Import CSV</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('siswas.importexcel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="import_file">Choose CSV file:</label>
                            <input type="file" class="form-control" name="file" required>
                            <small class="form-text text-muted">Hanya menerima file dengan format .csv, .xls, dan .xlsx</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
