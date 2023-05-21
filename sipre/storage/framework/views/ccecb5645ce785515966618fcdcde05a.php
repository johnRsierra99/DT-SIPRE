<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <?php echo e(Form::label('facultad')); ?>

            <?php echo e(Form::select('facultad_id',$facultad, $programa->facultad_id, ['class' => 'form-control' . ($errors->has('facultad_id') ? ' is-invalid' : ''), 'placeholder' => 'Facultad'])); ?>

            <?php echo $errors->first('facultad_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('descripción')); ?>

            <?php echo e(Form::text('descripcion', $programa->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\Users\danni\OneDrive\Documentos\Universidad\Programacion\Web\sipre\resources\views/programa/form.blade.php ENDPATH**/ ?>