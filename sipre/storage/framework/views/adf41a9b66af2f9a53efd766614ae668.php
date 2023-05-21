<?php $__env->startSection('template_title'); ?>
    <?php echo e($persona->name ?? "{{ __('Show') Persona"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('personas.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($persona->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            <?php echo e($persona->correo); ?>

                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            <?php echo e($persona->programa_id); ?>

                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            <?php echo e($persona->rol_id); ?>

                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            <?php echo e($persona->estado); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\danni\OneDrive\Documentos\Universidad\Programacion\Web\sipre\resources\views/persona/show.blade.php ENDPATH**/ ?>