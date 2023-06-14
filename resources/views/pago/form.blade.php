<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_pag') }}
            {{ Form::text('nombre_pag', $pago->nombre_pag, ['class' => 'form-control' . ($errors->has('nombre_pag') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Pag']) }}
            {!! $errors->first('nombre_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metodo_pag') }}
            {{ Form::text('metodo_pag', $pago->metodo_pag, ['class' => 'form-control' . ($errors->has('metodo_pag') ? ' is-invalid' : ''), 'placeholder' => 'Metodo Pag']) }}
            {!! $errors->first('metodo_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pag') }}
            {{ Form::text('fecha_pag', $pago->fecha_pag, ['class' => 'form-control' . ($errors->has('fecha_pag') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pag']) }}
            {!! $errors->first('fecha_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_pag') }}
            {{ Form::text('monto_pag', $pago->monto_pag, ['class' => 'form-control' . ($errors->has('monto_pag') ? ' is-invalid' : ''), 'placeholder' => 'Monto Pag']) }}
            {!! $errors->first('monto_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>