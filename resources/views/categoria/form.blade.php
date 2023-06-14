<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comentario_id') }}
            {{ Form::text('comentario_id', $categoria->comentario_id, ['class' => 'form-control' . ($errors->has('comentario_id') ? ' is-invalid' : ''), 'placeholder' => 'Comentario Id']) }}
            {!! $errors->first('comentario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('blog_id') }}
            {{ Form::text('blog_id', $categoria->blog_id, ['class' => 'form-control' . ($errors->has('blog_id') ? ' is-invalid' : ''), 'placeholder' => 'Blog Id']) }}
            {!! $errors->first('blog_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cat') }}
            {{ Form::text('nombre_cat', $categoria->nombre_cat, ['class' => 'form-control' . ($errors->has('nombre_cat') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cat']) }}
            {!! $errors->first('nombre_cat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>