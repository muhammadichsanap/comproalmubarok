<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tendik->id }}</p>
</div>

<!-- Nama Pendidik Field -->
<div class="col-sm-12">
    {!! Form::label('nama_pendidik', 'Nama Pendidik:') !!}
    <p>{{ $tendik->nama_pendidik }}</p>
</div>

<!-- Jabatan Pendidik Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan_pendidik', 'Jabatan Pendidik:') !!}
    <p>{{ $tendik->jabatan_pendidik }}</p>
</div>

<!-- Gambar Field -->
<div class="col-sm-12">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $tendik->gambar }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tendik->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tendik->updated_at }}</p>
</div>

