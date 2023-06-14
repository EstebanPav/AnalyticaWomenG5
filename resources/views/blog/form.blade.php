<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comentario_id') }}
            {{ Form::text('comentario_id', $blog->comentario_id, ['class' => 'form-control' . ($errors->has('comentario_id') ? ' is-invalid' : ''), 'placeholder' => 'Comentario Id']) }}
            {!! $errors->first('comentario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo_blog') }}
            {{ Form::text('titulo_blog', $blog->titulo_blog, ['class' => 'form-control' . ($errors->has('titulo_blog') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Blog']) }}
            {!! $errors->first('titulo_blog', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valoracion_blog') }}
            {{ Form::text('valoracion_blog', $blog->valoracion_blog, ['class' => 'form-control' . ($errors->has('valoracion_blog') ? ' is-invalid' : ''), 'placeholder' => 'Valoracion Blog']) }}
            {!! $errors->first('valoracion_blog', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>