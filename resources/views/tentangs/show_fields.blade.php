<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tentang->id }}</p>
</div>

<!-- Tentang Field -->
<div class="col-sm-12">
    {!! Form::label('tentang', 'Tentang:') !!}
    <p>{{ $tentang->tentang }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tentang->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tentang->updated_at }}</p>
</div>

