<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $kegiatan->id }}</p>
</div>

<!-- Nama Kegiatan Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan:') !!}
    <p>{{ $kegiatan->nama_kegiatan }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $kegiatan->keterangan }}</p>
</div>

<!-- Gambar Field -->
<div class="col-sm-12">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $kegiatan->gambar }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kegiatan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kegiatan->updated_at }}</p>
</div>

