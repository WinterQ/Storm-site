<?php $__env->startSection('title', 'Изменение данных'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменение данных</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Домой</a></li>
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
                </div>
            <?php endif; ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="<?php echo e(route('car.update',$car->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Модель</label>
                                        <select name="model_car_id" class="form-control" required>
                                            <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($model->id); ?>" <?php if($model->id == $car->model_car_id): ?> selected <?php endif; ?>><?php echo e($model->brand->name); ?> <?php echo e($model->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Тип кузова</label>
                                        <select name="bodywork_id" class="form-control" required>
                                            <?php $__currentLoopData = $bodyworks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bodywork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($bodywork->id); ?>" <?php if($bodywork->id == $car->bodywork_id): ?> selected <?php endif; ?>><?php echo e($bodywork->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Цвет</label>
                                        <select name="color_id" class="form-control" required>
                                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($color->id); ?>" <?php if($color->id == $car->color_id): ?> selected <?php endif; ?>><?php echo e($color->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Коробка передач</label>
                                        <select name="transmission_id" class="form-control" required>
                                            <?php $__currentLoopData = $transmissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transmission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($transmission->id); ?>" <?php if($transmission->id == $car->transmission_id): ?> selected <?php endif; ?>><?php echo e($transmission->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Мощность двигателя</label>
                                        <input value="<?php echo e($car->engine_power); ?>" type="text" name="engine_power" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите мощьность двигателя" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Длина</label>
                                        <input value="<?php echo e($car->length); ?>" type="text" name="length" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите длину" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ширина</label>
                                        <input value="<?php echo e($car->width); ?>" type="text" name="width" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите ширину" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Высота</label>
                                        <input value="<?php echo e($car->height); ?>" type="text" name="height" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите высоту" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Количество</label>
                                        <input value="<?php echo e($car->count_seats); ?>" type="text" name="count_seats" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите количество" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Год выпуска</label>
                                        <input value="<?php echo e($car->year_release); ?>" type="number" name="year_release" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите год выпуска" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo" class="form-label">Фото:</label>
                                        <input value="<?php echo e($car->photo); ?>" type="file" class="form-control" id="photo"
                                               name="photo">
                                    </div>
                                    <div class="form-group">
                                        <label>Статус</label>
                                        <input value="<?php echo e($car->status); ?>" type="number" name="status" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите статус" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Цена</label>
                                        <input value="<?php echo e($car->price); ?>" type="number" name="price" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите цену" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/admin/car/edit.blade.php ENDPATH**/ ?>