<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $posts->title }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $posts->content }}</p>
</div>

<!-- Featuredimage Field -->
<div class="col-sm-12">
    {!! Form::label('featuredImage', 'Featuredimage:') !!}
    <p>{{ $posts->featuredImage }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $posts->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $posts->updated_at }}</p>
</div>

