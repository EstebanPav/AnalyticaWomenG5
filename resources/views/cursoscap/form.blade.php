<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $cursoscap->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id',$clientes, $cursoscap->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cursoscaps') }}
            {{ Form::text('nombre_cursoscaps', $cursoscap->nombre_cursoscaps, ['class' => 'form-control' . ($errors->has('nombre_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cursoscaps']) }}
            {!! $errors->first('nombre_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descipcion_cursoscaps') }}
            {{ Form::text('descipcion_cursoscaps', $cursoscap->descipcion_cursoscaps, ['class' => 'form-control' . ($errors->has('descipcion_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Descipcion Cursoscaps']) }}
            {!! $errors->first('descipcion_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('publicacion_cursoscaps') }}
            {{ Form::text('publicacion_cursoscaps', $cursoscap->publicacion_cursoscaps, ['class' => 'form-control' . ($errors->has('publicacion_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Publicacion Cursoscaps']) }}
            {!! $errors->first('publicacion_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmin_cursoscaps') }}
            {{ Form::text('edadmin_cursoscaps', $cursoscap->edadmin_cursoscaps, ['class' => 'form-control' . ($errors->has('edadmin_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Edadmin Cursoscaps']) }}
            {!! $errors->first('edadmin_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadmax_cursoscaps') }}
            {{ Form::text('edadmax_cursoscaps', $cursoscap->edadmax_cursoscaps, ['class' => 'form-control' . ($errors->has('edadmax_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Edadmax Cursoscaps']) }}
            {!! $errors->first('edadmax_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('link_cursoscaps') }}
            {{ Form::text('link_cursoscaps', $cursoscap->link_cursoscaps, ['class' => 'form-control' . ($errors->has('link_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Link Cursoscaps']) }}
            {!! $errors->first('link_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cupos_cursoscaps') }}
            {{ Form::text('cupos_cursoscaps', $cursoscap->cupos_cursoscaps, ['class' => 'form-control' . ($errors->has('cupos_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Cupos Cursoscaps']) }}
            {!! $errors->first('cupos_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo_cursoscaps') }}
            {{ Form::text('costo_cursoscaps', $cursoscap->costo_cursoscaps, ['class' => 'form-control' . ($errors->has('costo_cursoscaps') ? ' is-invalid' : ''), 'placeholder' => 'Costo Cursoscaps']) }}
            {!! $errors->first('costo_cursoscaps', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>