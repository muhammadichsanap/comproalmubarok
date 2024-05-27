<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $misi->id }}</p>
</div>

<!-- Misi Field -->
<div class="col-sm-12">
    {!! Form::label('misi', 'Misi:') !!}
    <p>{{ $misi->misi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $misi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $misi->updated_at }}</p>
</div>

