<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $fasilitas->id }}</p>
</div>

<!-- Nama Fasilitas Field -->
<div class="col-sm-12">
    {!! Form::label('nama_fasilitas', 'Nama Fasilitas:') !!}
    <p>{{ $fasilitas->nama_fasilitas }}</p>
</div>

<!-- Keterangan Fasilitas Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan_fasilitas', 'Keterangan Fasilitas:') !!}
    <p>{{ $fasilitas->keterangan_fasilitas }}</p>
</div>

<!-- Jumlah Fasilitas Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_fasilitas', 'Jumlah Fasilitas:') !!}
    <p>{{ $fasilitas->jumlah_fasilitas }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $fasilitas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $fasilitas->updated_at }}</p>
</div>

