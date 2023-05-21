<?php $__env->startSection('template_title'); ?>
    <?php echo e($programa->name ?? "{{ __('Show') Programa"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('programa.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <?php echo e($programa->descripcion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Facultad Id:</strong>
                            <?php echo e($programa->facultad_id); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\danni\OneDrive\Documentos\Universidad\Programacion\Web\sipre\resources\views/programa/show.blade.php ENDPATH**/ ?>