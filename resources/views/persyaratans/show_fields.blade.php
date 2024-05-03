<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $persyaratan->id }}</p>
</div>

<!-- Syarat Field -->
<div class="col-sm-12">
    {!! Form::label('syarat', 'Syarat:') !!}
    <p>{{ $persyaratan->syarat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $persyaratan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $persyaratan->updated_at }}</p>
</div>

