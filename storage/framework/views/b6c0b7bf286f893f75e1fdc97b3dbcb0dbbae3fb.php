<?php $__env->startSection('content'); ?>
    <div class="container shadow-lg">
        <?php if(session('success')): ?>
            <div class="alert alert-success my-3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4 class="m-0"><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
            </div>
        <?php endif; ?>
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2 class="mt-2">Вы выбрали: <?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></h2>
                <div class="row p-3">
                    <div class="col mb-3">
                        <div class="d-flex justify-content-center flex-column">
                            <form action="<?php echo e(route('client.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="">
                                    <p>Имя:</p>
                                    <input type="text" name="first_name" class="form-control" placeholder="Введите имя">
                                    <p class="mt-2">Фамилия:</p>
                                    <input type="text" name="last_name" class="form-control" placeholder="Введите фамилию">
                                    <p class="mt-2">Телефон:</p>
                                    <input type="text" name="phone" class="form-control" placeholder="Введите номер телефона">
                                    <p class="mt-2">Почта:</p>
                                    <input type="text" name="email" class="form-control" placeholder="Введите электронный адрес">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 p-3 border rounded bg-dark text-white">
                        <p class="text-center"><?php echo e($car->modelcar->brand->name); ?> <?php echo e($car->modelcar->name); ?></p>
                        <img class="w-100" src="<?php echo e(asset('/storage/img/'.$car->photo)); ?>" alt="">
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div>Стоимость (руб.):</div>
                            <div><?php echo e($car->price); ?></div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white mt-3 w-100">Отправить заявку</button>
                    </div>
                </div>
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