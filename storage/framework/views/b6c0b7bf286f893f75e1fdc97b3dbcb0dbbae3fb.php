<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2 class="mt-2">Вы выбрали: <?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row p-3">
                    <div class="col mb-3">
                        <div class="d-flex justify-content-center flex-column">
                            <div class="">
                                <p>Имя:</p>
                                <input type="text" class="form-control" placeholder="Введите имя">
                                <p class="mt-2">Фамилия:</p>
                                <input type="text" class="form-control" placeholder="Введите фамилию">
                                <p class="mt-2">Телефон:</p>
                                <input type="text" class="form-control" placeholder="Введите номер телефона">
                                <p class="mt-2">Почта:</p>
                                <input type="text" class="form-control" placeholder="Введите электронный адрес">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3 border rounded bg-dark text-white">
                        <p class="text-center"><?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></p>
                        <img class="w-100" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt="">
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div>Стоимость (руб.):</div>
                            <div><?php echo e($car->price); ?></div>
                        </div>
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div><p>Количество:</p></div>
                            <div>
                                <input type="number" class="form-control input" max="3" min="1" value="1">
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-2">Отправить заявку</a>
                    </div>
                </div>
            </form>
            <div class="border my-4">
                <p class="text-center text-white bg-dark">Характеристики</p>
                <div class="row d-flex justify-content-around px-3">
                    <div class="col-md-auto">
                        <p>Тип кузова: <?php echo e($car->bodywork->name); ?></p>
                        <p>Цвет: <?php echo e($car->color->name); ?></p>
                        <p>Коробка передач: <?php echo e($car->transmission->name); ?></p>
                        <p>Тип двигателя: <?php echo e($car->modelcar->engine->engine_type); ?></p>
                    </div>
                    <div class="col-md-auto">
                        <p>Привод: <?php echo e($car->actuator->name); ?></p>
                        <p>Год выпуска: <?php echo e($car->year_release); ?></p>
                        <p>Мощность двигателя: <?php echo e($car->engine_power); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/car.blade.php ENDPATH**/ ?>