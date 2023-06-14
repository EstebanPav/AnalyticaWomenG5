<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $empleo->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id',$clientes, $empleo->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_emp') }}
            {{ Form::text('nombre_emp', $empleo->nombre_emp, ['class' => 'form-control' . ($errors->has('nombre_emp') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Emp']) }}
            {!! $errors->first('nombre_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_emp') }}
            {{ Form::text('descripcion_emp', $empleo->descripcion_emp, ['class' => 'form-control' . ($errors->has('descripcion_emp') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Emp']) }}
            {!! $errors->first('descripcion_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modalidad_emp') }}
            {{ Form::text('modalidad_emp', $empleo->modalidad_emp, ['class' => 'form-control' . ($errors->has('modalidad_emp') ? ' is-invalid' : ''), 'placeholder' => 'Modalidad Emp']) }}
            {!! $errors->first('modalidad_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_emp') }}
            {{ Form::text('horario_emp', $empleo->horario_emp, ['class' => 'form-control' . ($errors->has('horario_emp') ? ' is-invalid' : ''), 'placeholder' => 'Horario Emp']) }}
            {!! $errors->first('horario_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechapub_emp') }}
            {{ Form::text('fechapub_emp', $empleo->fechapub_emp, ['class' => 'form-control' . ($errors->has('fechapub_emp') ? ' is-invalid' : ''), 'placeholder' => 'Fechapub Emp']) }}
            {!! $errors->first('fechapub_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia_emp') }}
            {{ Form::text('experiencia_emp', $empleo->experiencia_emp, ['class' => 'form-control' . ($errors->has('experiencia_emp') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia Emp']) }}
            {!! $errors->first('experiencia_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>