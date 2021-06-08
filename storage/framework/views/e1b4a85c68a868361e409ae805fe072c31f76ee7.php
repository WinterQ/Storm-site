<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="text-center"><?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></h1>
            <img class="card-img-top my-3" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt=" Card image cap">
            <h2>Характеристики:</h2>
            <span class="">
                <div class="row border-top-0">
                <div class="col-md-5">
                    <p>Тип кузова: <?php echo e($car->bodywork->name); ?></p>
                    <p>Коробка передач: <?php echo e($car->transmission->name); ?></p>
                    <p>Тип двигателя: <?php echo e($car->modelcar->engine->engine_type); ?></p>
                    <p>Мощность двигателя: <?php echo e($car->engine_power); ?></p>
                </div>
                <div class="col-md-3">
                    <p>Цвет: <?php echo e($car->color->name); ?></p>
                    <p>Длина: <?php echo e($car->length); ?></p>
                    <p>Ширина: <?php echo e($car->width); ?></p>
                    <p>Высота: <?php echo e($car->height); ?></p>
                </div>
                <div class="col-md-3">
                    <p>В наличии: <?php echo e($car->count_seats); ?></p>
                    <p>Год выпуска: <?php echo e($car->year_release); ?></p>
                    <p>Цена: <?php echo e($car->price); ?> руб.</p>
                </div>
            </div>
            </span>
            <div class="d-flex justify-content-end p-3">
                <button class="btn btn-primary align-self-center cart_button">В корзину</button>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/car.blade.php ENDPATH**/ ?>