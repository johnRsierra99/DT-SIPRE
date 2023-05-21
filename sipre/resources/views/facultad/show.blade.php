@extends('layouts.app')

@section('template_title')
    {{ $facultad->name ?? "{{ __('Show') Facultad" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Facultad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facultad.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $facultad->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
