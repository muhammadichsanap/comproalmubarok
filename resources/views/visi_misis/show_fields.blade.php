<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $visiMisi->id }}</p>
</div>

<!-- Visi Field -->
<div class="col-sm-12">
    {!! Form::label('visi', 'Visi:') !!}
    <p>{{ $visiMisi->visi }}</p>
</div>

<!-- Misi Field -->
<div class="col-sm-12">
    {!! Form::label('misi', 'Misi:') !!}
    <p>{{ $visiMisi->misi }}</p>
</div>

<!-- Tentang Field -->
<div class="col-sm-12">
    {!! Form::label('tentang', 'Tentang:') !!}
    <p>{{ $visiMisi->tentang }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $visiMisi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $visiMisi->updated_at }}</p>
</div>

