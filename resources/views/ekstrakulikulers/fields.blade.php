<!-- Nama Ekstrakulikuler Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_ekstrakulikuler', 'Nama Ekstrakulikuler:') !!}
    {!! Form::text('nama_ekstrakulikuler', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Fasilitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan_fasilitas', 'Keterangan Ekstrakulikuler:') !!}
    {!! Form::text('keterangan_fasilitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Gambar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gambar', 'Gambar:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('gambar', ['class' => 'custom-file-input']) !!}
            {!! Form::label('gambar', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
