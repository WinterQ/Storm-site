<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row bg-dark mt-3 text-white rounded">
                <div class="col p-0">
                    <img class="w-100 rounded" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt=" Card image cap">
                    <p class="font-weight-bold text-center bg-blue">Цена: <?php echo e($car->price); ?> руб.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center m-3"><?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></h4>
                    <hr class="bg-white w-50 rounded">
                    <h4>Характеристики:</h4>
                    <div class="row border-top-0">
                        <div class="col-md-auto">
                            <p>Тип кузова: <?php echo e($car->bodywork->name); ?></p>
                            <p>Цвет: <?php echo e($car->color->name); ?></p>
                            <p>Коробка передач: <?php echo e($car->transmission->name); ?></p>
                            <p>Тип двигателя: <?php echo e($car->modelcar->engine->engine_type); ?></p>

                        </div>
                        <div class="col">
                            <p>В наличии: <?php echo e($car->count_seats); ?></p>
                            <p>Год выпуска: <?php echo e($car->year_release); ?></p>
                            <p>Мощность двигателя: <?php echo e($car->engine_power); ?></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary p-1" href="#">Сделать заявку</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/car.blade.php ENDPATH**/ ?>