<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <div class="row d-flex justify-content-center">
            <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-5 div-hover my-3">
                    <div class="card div-models text-light grow">
                        <a href="<?php echo e(route('cars-model',[$model->id])); ?>">
                            <img class="card-img-top" src="<?php echo e(asset('/storage/img/'.$model->photo)); ?>" alt="Card image cap">
                        </a>
                        <h3 class="card-title text-center m-3"><?php echo e($model->name); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/models.blade.php ENDPATH**/ ?>