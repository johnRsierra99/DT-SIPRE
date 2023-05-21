<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <?php echo e(Form::label('cédula')); ?>

            <?php echo e(Form::text('id', $persona->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Cédula'])); ?>

            <?php echo $errors->first('id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $persona->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('correo')); ?>

            <?php echo e(Form::text('correo', $persona->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo'])); ?>

            <?php echo $errors->first('correo', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('programa')); ?>

            <?php echo e(Form::select('programa_id',$programa, $persona->programa_id, ['class' => 'form-control' . ($errors->has('programa_id') ? ' is-invalid' : ''), 'placeholder' => 'Programa'])); ?>

            <?php echo $errors->first('programa_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('rol')); ?>

            <?php echo e(Form::select('rol_id', $rol,$persona->rol_id, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Rol'])); ?>

            <?php echo $errors->first('rol_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('estado')); ?>

            <?php echo e(Form::select('estado', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'], $persona->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un estado'])); ?>

            <?php echo $errors->first('estado', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\Users\danni\OneDrive\Documentos\Universidad\Programacion\Web\sipre\resources\views/persona/form.blade.php ENDPATH**/ ?>