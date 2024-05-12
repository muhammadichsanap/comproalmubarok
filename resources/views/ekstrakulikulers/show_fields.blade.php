<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ekstrakulikuler->id }}</p>
</div>

<!-- Nama Ekstrakulikuler Field -->
<div class="col-sm-12">
    {!! Form::label('nama_ekstrakulikuler', 'Nama Ekstrakulikuler:') !!}
    <p>{{ $ekstrakulikuler->nama_ekstrakulikuler }}</p>
</div>

<!-- Keterangan Fasilitas Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan_ekstrakulikuler', 'Keterangan Ekstrakulikuler:') !!}
    <p>{{ $ekstrakulikuler->keterangan_fasilitas }}</p>
</div>

<!-- Gambar Field -->
<div class="col-sm-12">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $ekstrakulikuler->gambar }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ekstrakulikuler->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ekstrakulikuler->updated_at }}</p>
</div>

