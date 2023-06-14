<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $servicio->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_serv') }}
            {{ Form::text('nombre_serv', $servicio->nombre_serv, ['class' => 'form-control' . ($errors->has('nombre_serv') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Serv']) }}
            {!! $errors->first('nombre_serv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_serv') }}
            {{ Form::text('descripcion_serv', $servicio->descripcion_serv, ['class' => 'form-control' . ($errors->has('descripcion_serv') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Serv']) }}
            {!! $errors->first('descripcion_serv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_serv') }}
            {{ Form::text('precio_serv', $servicio->precio_serv, ['class' => 'form-control' . ($errors->has('precio_serv') ? ' is-invalid' : ''), 'placeholder' => 'Precio Serv']) }}
            {!! $errors->first('precio_serv', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>