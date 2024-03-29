<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $alumni->id }}</p>
</div>

<!-- Nama Alumni Field -->
<div class="col-sm-12">
    {!! Form::label('nama_alumni', 'Nama Alumni:') !!}
    <p>{{ $alumni->nama_alumni }}</p>
</div>

<!-- Tahun Lulus Field -->
<div class="col-sm-12">
    {!! Form::label('tahun_lulus', 'Tahun Lulus:') !!}
    <p>{{ $alumni->tahun_lulus }}</p>
</div>

<!-- Smp Field -->
<div class="col-sm-12">
    {!! Form::label('smp', 'Smp:') !!}
    <p>{{ $alumni->smp }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $alumni->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $alumni->updated_at }}</p>
</div>

