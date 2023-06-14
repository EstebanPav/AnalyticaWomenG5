@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? "{{ __('Show') Contacto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Contc:</strong>
                            {{ $contacto->nombre_contc }}
                        </div>
                        <div class="form-group">
                            <strong>Tel1 Contc:</strong>
                            {{ $contacto->tel1_contc }}
                        </div>
                        <div class="form-group">
                            <strong>Tel2 Contc:</strong>
                            {{ $contacto->tel2_contc }}
                        </div>
                        <div class="form-group">
                            <strong>Email1 Contc:</strong>
                            {{ $contacto->email1_contc }}
                        </div>
                        <div class="form-group">
                            <strong>Email2 Contc:</strong>
                            {{ $contacto->email2_contc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
