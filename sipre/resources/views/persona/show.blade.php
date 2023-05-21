@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? "{{ __('Show') Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $persona->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            {{ $persona->programa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            {{ $persona->rol_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $persona->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
