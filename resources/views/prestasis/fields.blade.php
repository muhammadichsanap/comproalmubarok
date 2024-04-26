<!-- Nama Siswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_siswa', 'Nama Siswa:') !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Prestasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prestasi', 'Prestasi:') !!}
    {!! Form::text('prestasi', null, ['class' => 'form-control']) !!}
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
