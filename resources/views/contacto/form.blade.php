<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_contc') }}
            {{ Form::text('nombre_contc', $contacto->nombre_contc, ['class' => 'form-control' . ($errors->has('nombre_contc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Contc']) }}
            {!! $errors->first('nombre_contc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel1_contc') }}
            {{ Form::text('tel1_contc', $contacto->tel1_contc, ['class' => 'form-control' . ($errors->has('tel1_contc') ? ' is-invalid' : ''), 'placeholder' => 'Tel1 Contc']) }}
            {!! $errors->first('tel1_contc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel2_contc') }}
            {{ Form::text('tel2_contc', $contacto->tel2_contc, ['class' => 'form-control' . ($errors->has('tel2_contc') ? ' is-invalid' : ''), 'placeholder' => 'Tel2 Contc']) }}
            {!! $errors->first('tel2_contc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email1_contc') }}
            {{ Form::text('email1_contc', $contacto->email1_contc, ['class' => 'form-control' . ($errors->has('email1_contc') ? ' is-invalid' : ''), 'placeholder' => 'Email1 Contc']) }}
            {!! $errors->first('email1_contc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email2_contc') }}
            {{ Form::text('email2_contc', $contacto->email2_contc, ['class' => 'form-control' . ($errors->has('email2_contc') ? ' is-invalid' : ''), 'placeholder' => 'Email2 Contc']) }}
            {!! $errors->first('email2_contc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>