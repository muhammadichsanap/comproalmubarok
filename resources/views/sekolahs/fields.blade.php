<!-- Nama Sekolah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_sekolah', 'Nama Sekolah:') !!}
    {!! Form::text('nama_sekolah', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Sekolah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat_sekolah', 'Alamat Sekolah:') !!}
    {!! Form::text('alamat_sekolah', null, ['class' => 'form-control']) !!}
</div>

<!-- Akreditasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('akreditasi', 'Akreditasi:') !!}
    {!! Form::text('akreditasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Kurikulum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kurikulum', 'Kurikulum:') !!}
    {!! Form::text('kurikulum', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Siswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_siswa', 'Jumlah Siswa:') !!}
    {!! Form::number('jumlah_siswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Jam Belajar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jam_belajar', 'Jam Belajar:') !!}
    {!! Form::text('jam_belajar', null, ['class' => 'form-control']) !!}
</div>

<!-- No Wa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_wa', 'No Wa:') !!}
    {!! Form::text('no_wa', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
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
