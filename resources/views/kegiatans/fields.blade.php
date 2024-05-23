<!-- Nama Kegiatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan:') !!}
    {!! Form::text('nama_kegiatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_url', 'Link Url:') !!}
    {!! Form::text('link_url', null, ['class' => 'form-control']) !!}
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
