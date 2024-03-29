<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $prestasi->id }}</p>
</div>

<!-- Nama Siswa Field -->
<div class="col-sm-12">
    {!! Form::label('nama_siswa', 'Nama Siswa:') !!}
    <p>{{ $prestasi->nama_siswa }}</p>
</div>

<!-- Prestasi Field -->
<div class="col-sm-12">
    {!! Form::label('prestasi', 'Prestasi:') !!}
    <p>{{ $prestasi->prestasi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $prestasi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $prestasi->updated_at }}</p>
</div>

