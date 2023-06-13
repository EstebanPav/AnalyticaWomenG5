@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cli:</strong>
                            {{ $cliente->id_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $cliente->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cli:</strong>
                            {{ $cliente->nombre_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nac Cli:</strong>
                            {{ $cliente->fecha_nac_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono1 Cli:</strong>
                            {{ $cliente->telefono1_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono2 Cli:</strong>
                            {{ $cliente->telefono2_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Email Cli:</strong>
                            {{ $cliente->email_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo Cli:</strong>
                            {{ $cliente->titulo_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Cli:</strong>
                            {{ $cliente->rol_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia Cli:</strong>
                            {{ $cliente->experiencia_cli }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
