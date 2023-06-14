@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? "{{ __('Show') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Event:</strong>
                            {{ $evento->nombre_event }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Event:</strong>
                            {{ $evento->descripcion_event }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Event:</strong>
                            {{ $evento->fecha_event }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Event:</strong>
                            {{ $evento->horas_event }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion Event:</strong>
                            {{ $evento->ubicacion_event }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion Event:</strong>
                            {{ $evento->observacion_event }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
