<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_gen') }}
            {{ Form::text('Nombre_gen', $genero->Nombre_gen, ['class' => 'form-control' . ($errors->has('Nombre_gen') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Gen']) }}
            {!! $errors->first('Nombre_gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>