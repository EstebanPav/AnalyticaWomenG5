<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('provincia_id') }}
            {{ Form::text('provincia_id', $ciudade->provincia_id, ['class' => 'form-control' . ($errors->has('provincia_id') ? ' is-invalid' : ''), 'placeholder' => 'Provincia Id']) }}
            {!! $errors->first('provincia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provincia_id') }}
            {{ Form::select('provincia_id',$provincias, $ciudade->provincia_id, ['class' => 'form-control' . ($errors->has('provincia_id') ? ' is-invalid' : ''), 'placeholder' => 'Provincia Id']) }}
            {!! $errors->first('provincia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_ciu') }}
            {{ Form::text('nombre_ciu', $ciudade->nombre_ciu, ['class' => 'form-control' . ($errors->has('nombre_ciu') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Ciu']) }}
            {!! $errors->first('nombre_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>