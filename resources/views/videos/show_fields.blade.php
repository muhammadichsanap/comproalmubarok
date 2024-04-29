<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $video->id }}</p>
</div>

<!-- Link Url Field -->
<div class="col-sm-12">
    {!! Form::label('link_url', 'Link Url:') !!}
    <p>{{ $video->link_url }}</p>
</div>

<!-- Judul Video Field -->
<div class="col-sm-12">
    {!! Form::label('judul_video', 'Judul Video:') !!}
    <p>{{ $video->judul_video }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $video->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $video->updated_at }}</p>
</div>

