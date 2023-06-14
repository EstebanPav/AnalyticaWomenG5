<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('red_id') }}
            {{ Form::text('red_id', $informacion->red_id, ['class' => 'form-control' . ($errors->has('red_id') ? ' is-invalid' : ''), 'placeholder' => 'Red Id']) }}
            {!! $errors->first('red_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cont_id') }}
            {{ Form::text('cont_id', $informacion->cont_id, ['class' => 'form-control' . ($errors->has('cont_id') ? ' is-invalid' : ''), 'placeholder' => 'Cont Id']) }}
            {!! $errors->first('cont_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mision_inf') }}
            {{ Form::text('mision_inf', $informacion->mision_inf, ['class' => 'form-control' . ($errors->has('mision_inf') ? ' is-invalid' : ''), 'placeholder' => 'Mision Inf']) }}
            {!! $errors->first('mision_inf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vision_inf') }}
            {{ Form::text('vision_inf', $informacion->vision_inf, ['class' => 'form-control' . ($errors->has('vision_inf') ? ' is-invalid' : ''), 'placeholder' => 'Vision Inf']) }}
            {!! $errors->first('vision_inf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cultural_inf') }}
            {{ Form::text('cultural_inf', $informacion->cultural_inf, ['class' => 'form-control' . ($errors->has('cultural_inf') ? ' is-invalid' : ''), 'placeholder' => 'Cultural Inf']) }}
            {!! $errors->first('cultural_inf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>