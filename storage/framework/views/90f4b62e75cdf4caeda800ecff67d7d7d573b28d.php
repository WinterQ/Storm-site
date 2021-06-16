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
                        <form action="<?php echo e(route('client.update',$clients->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input value="<?php echo e($clients->first_name); ?>" type="text" name="first_name" class="form-control" id="exampleInputCategory"
                                           placeholder="ведите имя" required>
                                </div>
                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input value="<?php echo e($clients->last_name); ?>" type="text" name="last_name" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите фамилию" required>
                                </div>
                                <div class="form-group">
                                    <label>Телефон</label>
                                    <input value="<?php echo e($clients->phone); ?>" type="text" name="phone" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите телефон" required>
                                </div>
                                <div class="form-group">
                                    <label>Почта</label>
                                    <input value="<?php echo e($clients->email); ?>" type="text" name="email" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите адрес почты" required>
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

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/admin/client/edit.blade.php ENDPATH**/ ?>