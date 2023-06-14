<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_event') }}
            {{ Form::text('nombre_event', $evento->nombre_event, ['class' => 'form-control' . ($errors->has('nombre_event') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Event']) }}
            {!! $errors->first('nombre_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_event') }}
            {{ Form::text('descripcion_event', $evento->descripcion_event, ['class' => 'form-control' . ($errors->has('descripcion_event') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Event']) }}
            {!! $errors->first('descripcion_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_event') }}
            {{ Form::text('fecha_event', $evento->fecha_event, ['class' => 'form-control' . ($errors->has('fecha_event') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Event']) }}
            {!! $errors->first('fecha_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_event') }}
            {{ Form::text('horas_event', $evento->horas_event, ['class' => 'form-control' . ($errors->has('horas_event') ? ' is-invalid' : ''), 'placeholder' => 'Horas Event']) }}
            {!! $errors->first('horas_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion_event') }}
            {{ Form::text('ubicacion_event', $evento->ubicacion_event, ['class' => 'form-control' . ($errors->has('ubicacion_event') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion Event']) }}
            {!! $errors->first('ubicacion_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion_event') }}
            {{ Form::text('observacion_event', $evento->observacion_event, ['class' => 'form-control' . ($errors->has('observacion_event') ? ' is-invalid' : ''), 'placeholder' => 'Observacion Event']) }}
            {!! $errors->first('observacion_event', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>