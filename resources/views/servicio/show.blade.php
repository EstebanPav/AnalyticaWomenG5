@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? "{{ __('Show') Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $servicio->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Serv:</strong>
                            {{ $servicio->nombre_serv }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Serv:</strong>
                            {{ $servicio->descripcion_serv }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Serv:</strong>
                            {{ $servicio->precio_serv }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
