<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <div class="card-group mt-3">
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></h2>
                            <p class="card-text">В наличии: <?php echo e($car->count_seats); ?></p>
                            <p class="card-text">Цена: <?php echo e($car->price); ?></p>
                            <a class="btn btn-primary" href="<?php echo e(route('cars-model',[$car->modelcar->id])); ?>">Подробно...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/all-cars.blade.php ENDPATH**/ ?>