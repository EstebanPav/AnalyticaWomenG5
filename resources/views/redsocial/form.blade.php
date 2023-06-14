<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_redsocials') }}
            {{ Form::text('nombre_redsocials', $redsocial->nombre_redsocials, ['class' => 'form-control' . ($errors->has('nombre_redsocials') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Redsocials']) }}
            {!! $errors->first('nombre_redsocials', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>