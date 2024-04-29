@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Import Excel Into database</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('siswas.import.excel') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="import_file">Choose CSV file:</label>
                                <input type="file" class="form-control-file" id="import_file" name="import_file">
                            </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection