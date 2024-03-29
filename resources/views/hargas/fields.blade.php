<!-- Uang Gedung Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uang_gedung', 'Uang Gedung:') !!}
    {!! Form::number('uang_gedung', null, ['class' => 'form-control']) !!}
</div>

<!-- Uang Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uang_masuk', 'Uang Masuk:') !!}
    {!! Form::number('uang_masuk', null, ['class' => 'form-control']) !!}
</div>

<!-- Spp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spp', 'Spp:') !!}
    {!! Form::text('spp', null, ['class' => 'form-control']) !!}
</div>