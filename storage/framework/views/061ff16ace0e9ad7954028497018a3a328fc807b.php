
<?php $__env->startSection('title', 'Добавление клиента'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление клиента</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Домой</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo e(url('admin_panel')); ?>">Главная</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4 class="m-0"><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
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
                        <form action="<?php echo e(route('client.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input type="text" name="first_name" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите имя" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Фамилия</label>
                                        <input type="text" name="last_name" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите фамилию" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите телефон" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Почта</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputCategory"
                                               placeholder="Введите адрес почты" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/admin/client/create.blade.php ENDPATH**/ ?>