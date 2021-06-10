<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row bg-dark mt-4 text-white rounded">
                <div class="col">
                    <img class="w-100 rounded mt-3" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt=" Card image cap">
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
                            <p>Привод: <?php echo e($car->actuator->name); ?></p>
                            <p>В наличии: <?php echo e($car->count_seats); ?></p>
                            <p>Год выпуска: <?php echo e($car->year_release); ?></p>
                            <p>Мощность двигателя: <?php echo e($car->engine_power); ?></p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-content-stretch">
                        <a class="btn btn-primary pull-right" style="font-size: 20px" href="#" role="button">Сделать заявку</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/car.blade.php ENDPATH**/ ?>