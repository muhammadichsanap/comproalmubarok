<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $program->id }}</p>
</div>

<!-- Nama Program Field -->
<div class="col-sm-12">
    {!! Form::label('nama_program', 'Nama Program:') !!}
    <p>{{ $program->nama_program }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $program->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $program->updated_at }}</p>
</div>

