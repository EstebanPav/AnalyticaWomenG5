<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contenido_com') }}
            {{ Form::text('contenido_com', $comentario->contenido_com, ['class' => 'form-control' . ($errors->has('contenido_com') ? ' is-invalid' : ''), 'placeholder' => 'Contenido Com']) }}
            {!! $errors->first('contenido_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechapub_com') }}
            {{ Form::text('fechapub_com', $comentario->fechapub_com, ['class' => 'form-control' . ($errors->has('fechapub_com') ? ' is-invalid' : ''), 'placeholder' => 'Fechapub Com']) }}
            {!! $errors->first('fechapub_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('revision_com') }}
            {{ Form::text('revision_com', $comentario->revision_com, ['class' => 'form-control' . ($errors->has('revision_com') ? ' is-invalid' : ''), 'placeholder' => 'Revision Com']) }}
            {!! $errors->first('revision_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>