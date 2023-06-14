@extends('layouts.app')

@section('template_title')
    {{ $blog->name ?? "{{ __('Show') Blog" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Blog</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('blogs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comentario Id:</strong>
                            {{ $blog->comentario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo Blog:</strong>
                            {{ $blog->titulo_blog }}
                        </div>
                        <div class="form-group">
                            <strong>Valoracion Blog:</strong>
                            {{ $blog->valoracion_blog }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
