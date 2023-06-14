@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Show') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Pag:</strong>
                            {{ $pago->nombre_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Metodo Pag:</strong>
                            {{ $pago->metodo_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pag:</strong>
                            {{ $pago->fecha_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Pag:</strong>
                            {{ $pago->monto_pag }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
