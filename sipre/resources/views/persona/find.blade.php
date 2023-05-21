@extends('layouts.app')

@section('template_title')
{{ __('Find') }} Persona
@endsection

@section('content')
<section class="content container-fluid">
<div class="row">
<div class="col-md-12">
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">{{ __('Find') }} Persona</span>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('personas.show') }}" role="form">
                <div class="form-group">
                    <label for="id">{{ __('ID') }}</label>
                    <input type="text" name="id" id="id" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection
