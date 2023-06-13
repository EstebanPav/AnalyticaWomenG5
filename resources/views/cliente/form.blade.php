<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cli') }}
            {{ Form::text('id_cli', $cliente->id_cli, ['class' => 'form-control' . ($errors->has('id_cli') ? ' is-invalid' : ''), 'placeholder' => 'Id Cli']) }}
            {!! $errors->first('id_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::text('genero_id', $cliente->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cli') }}
            {{ Form::text('nombre_cli', $cliente->nombre_cli, ['class' => 'form-control' . ($errors->has('nombre_cli') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cli']) }}
            {!! $errors->first('nombre_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nac_cli') }}
            {{ Form::text('fecha_nac_cli', $cliente->fecha_nac_cli, ['class' => 'form-control' . ($errors->has('fecha_nac_cli') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac Cli']) }}
            {!! $errors->first('fecha_nac_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono1_cli') }}
            {{ Form::text('telefono1_cli', $cliente->telefono1_cli, ['class' => 'form-control' . ($errors->has('telefono1_cli') ? ' is-invalid' : ''), 'placeholder' => 'Telefono1 Cli']) }}
            {!! $errors->first('telefono1_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono2_cli') }}
            {{ Form::text('telefono2_cli', $cliente->telefono2_cli, ['class' => 'form-control' . ($errors->has('telefono2_cli') ? ' is-invalid' : ''), 'placeholder' => 'Telefono2 Cli']) }}
            {!! $errors->first('telefono2_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_cli') }}
            {{ Form::text('email_cli', $cliente->email_cli, ['class' => 'form-control' . ($errors->has('email_cli') ? ' is-invalid' : ''), 'placeholder' => 'Email Cli']) }}
            {!! $errors->first('email_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo_cli') }}
            {{ Form::text('titulo_cli', $cliente->titulo_cli, ['class' => 'form-control' . ($errors->has('titulo_cli') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Cli']) }}
            {!! $errors->first('titulo_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rol_cli') }}
            {{ Form::text('rol_cli', $cliente->rol_cli, ['class' => 'form-control' . ($errors->has('rol_cli') ? ' is-invalid' : ''), 'placeholder' => 'Rol Cli']) }}
            {!! $errors->first('rol_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia_cli') }}
            {{ Form::text('experiencia_cli', $cliente->experiencia_cli, ['class' => 'form-control' . ($errors->has('experiencia_cli') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia Cli']) }}
            {!! $errors->first('experiencia_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>