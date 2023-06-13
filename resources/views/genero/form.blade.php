<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_gen') }}
            {{ Form::text('id_gen', $genero->id, ['class' => 'form-control' . ($errors->has('id_gen') ? ' is-invalid' : ''), 'placeholder' => 'Id Gen']) }}
            {!! $errors->first('id_gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_gen') }}
            {{ Form::text('nombre_gen', $genero->nombre_gen, ['class' => 'form-control' . ($errors->has('nombre_gen') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Gen']) }}
            {!! $errors->first('nombre_gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>