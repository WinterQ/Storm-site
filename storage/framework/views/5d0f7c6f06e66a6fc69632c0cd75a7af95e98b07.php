<?php $__env->startSection('content'); ?>
    <div class="container mtopcont shadow-lg">
        <h1 class="m-3">Выберите модель, которая вас интересует</h1>
        <div class="row d-flex justify-content-center">
            <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-5 div-hover my-3">
                    <div class="card">
                        <a href="<?php echo e(route('cars-model',[$model->id])); ?>">
                            <img class="card-img-top" src="<?php echo e(asset($model->photo)); ?>" alt="Card image cap">
                        </a>
                        <h3 class="card-title text-center"><?php echo e($model->brand->name); ?> <?php echo e($model->name); ?></h3>
                        <h3>Тип двигателя: <?php echo e($model->engine->engine_type); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm\resources\views/models.blade.php ENDPATH**/ ?>
