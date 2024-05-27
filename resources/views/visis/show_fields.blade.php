<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $visi->id }}</p>
</div>

<!-- Visi Field -->
<div class="col-sm-12">
    {!! Form::label('visi', 'Visi:') !!}
    <p>{{ $visi->visi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $visi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $visi->updated_at }}</p>
</div>

