<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Featuredimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('featuredImage', 'Featuredimage:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('featuredImage', ['class' => 'custom-file-input']) !!}
            {!! Form::label('featuredImage', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
