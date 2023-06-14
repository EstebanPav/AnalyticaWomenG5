@extends('layouts.app')

@section('template_title')
    {{ $empleo->name ?? "{{ __('Show') Empleo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $empleo->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Emp:</strong>
                            {{ $empleo->nombre_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Emp:</strong>
                            {{ $empleo->descripcion_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad Emp:</strong>
                            {{ $empleo->modalidad_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Emp:</strong>
                            {{ $empleo->horario_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Fechapub Emp:</strong>
                            {{ $empleo->fechapub_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia Emp:</strong>
                            {{ $empleo->experiencia_emp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
