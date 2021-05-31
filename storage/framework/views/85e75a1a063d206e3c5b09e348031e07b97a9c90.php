<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="container  shadow-lg">
            <h1 class="m-3">Выберите марку, которая вас интересует:</h1>
            <div class="responsive">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 div-hover">
                        <div class="card m-3">
                            <a href="<?php echo e(route('brand.show', $brand->id)); ?>"><img class="card-img-top" src="<?php echo e($brand->photo); ?>" alt=" Card image cap"></a>
                            <h4 class="card-title text-center my-2"><?php echo e($brand->name); ?></h4>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\OpenServer\domains\Storm\resources\views/home.blade.php ENDPATH**/ ?>