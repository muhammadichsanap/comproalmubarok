<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $harga->id }}</p>
</div>

<!-- Uang Gedung Field -->
<div class="col-sm-12">
    {!! Form::label('uang_gedung', 'Uang Gedung:') !!}
    <p>{{ $harga->uang_gedung }}</p>
</div>

<!-- Uang Masuk Field -->
<div class="col-sm-12">
    {!! Form::label('uang_masuk', 'Uang Masuk:') !!}
    <p>{{ $harga->uang_masuk }}</p>
</div>

<!-- Spp Field -->
<div class="col-sm-12">
    {!! Form::label('spp', 'Spp:') !!}
    <p>{{ $harga->spp }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $harga->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $harga->updated_at }}</p>
</div>

