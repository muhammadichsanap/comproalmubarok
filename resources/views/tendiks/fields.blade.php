<!-- Nama Pendidik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pendidik', 'Nama Pendidik:') !!}
    {!! Form::text('nama_pendidik', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Pendidik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_pendidik', 'Jabatan Pendidik:') !!}
    {!! Form::text('jabatan_pendidik', null, ['class' => 'form-control']) !!}
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
