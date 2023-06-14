@extends('layouts.app')

@section('template_title')
    {{ $informacion->name ?? "{{ __('Show') Informacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Informacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('informacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Red Id:</strong>
                            {{ $informacion->red_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cont Id:</strong>
                            {{ $informacion->cont_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mision Inf:</strong>
                            {{ $informacion->mision_inf }}
                        </div>
                        <div class="form-group">
                            <strong>Vision Inf:</strong>
                            {{ $informacion->vision_inf }}
                        </div>
                        <div class="form-group">
                            <strong>Cultural Inf:</strong>
                            {{ $informacion->cultural_inf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
