@extends('layouts.app')

@section('template_title')
    {{ $cursoscap->name ?? "{{ __('Show') Cursoscap" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cursoscap</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursoscaps.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $cursoscap->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cursoscaps:</strong>
                            {{ $cursoscap->nombre_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Descipcion Cursoscaps:</strong>
                            {{ $cursoscap->descipcion_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Publicacion Cursoscaps:</strong>
                            {{ $cursoscap->publicacion_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmin Cursoscaps:</strong>
                            {{ $cursoscap->edadmin_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Edadmax Cursoscaps:</strong>
                            {{ $cursoscap->edadmax_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Link Cursoscaps:</strong>
                            {{ $cursoscap->link_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Cupos Cursoscaps:</strong>
                            {{ $cursoscap->cupos_cursoscaps }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Cursoscaps:</strong>
                            {{ $cursoscap->costo_cursoscaps }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
