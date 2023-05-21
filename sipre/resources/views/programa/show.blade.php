@extends('layouts.app')

@section('template_title')
    {{ $programa->name ?? "{{ __('Show') Programa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programa.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $programa->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Facultad Id:</strong>
                            {{ $programa->facultad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
