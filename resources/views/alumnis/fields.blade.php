<!-- Nama Alumni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_alumni', 'Nama Alumni:') !!}
    {!! Form::text('nama_alumni', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahun Lulus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_lulus', 'Tahun Lulus:') !!}
    {!! Form::number('tahun_lulus', null, ['class' => 'form-control']) !!}
</div>

<!-- Smp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smp', 'Smp:') !!}
    {!! Form::text('smp', null, ['class' => 'form-control']) !!}
</div>