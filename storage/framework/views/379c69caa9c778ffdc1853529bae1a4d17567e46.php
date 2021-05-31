<?php $__env->startSection('content'); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide m-carousel" data-ride="carousel">
        <div class="car ousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo e('/img/Carousel/1.jpg'); ?>" alt="Первый слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo e('/img/Carousel/2.jpg'); ?>" alt="Второй слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo e('/img/Carousel/3.jpg'); ?>" alt="Третий слайд">
            </div>
        </div>
    </div>
    <div class="container shadow">
        <h1 class="m-3">Выберите марку, которая вас интересует:</h1>
        <div class="responsive">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 div-hover">
                    <div class="card m-3">
                        <a href="<?php echo e(route('brand-show', $brand->id)); ?>"><img class="card-img-top" src="<?php echo e('/storage/img/'.$brand->photo); ?>" alt=" Card image cap"></a>
                        <h4 class="card-title text-center my-2"><?php echo e($brand->name); ?></h4>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/brands.blade.php ENDPATH**/ ?>