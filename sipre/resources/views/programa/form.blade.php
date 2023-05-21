<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('facultad') }}
            {{ Form::select('facultad_id',$facultad, $programa->facultad_id, ['class' => 'form-control' . ($errors->has('facultad_id') ? ' is-invalid' : ''), 'placeholder' => 'Facultad']) }}
            {!! $errors->first('facultad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcion', $programa->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
