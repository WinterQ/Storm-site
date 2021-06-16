<?php $__env->startSection('title','Все заявки'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все заявки</h1>
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
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        *
                    </button>
                    <h4 class="m-0"><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
                </div>
            <?php endif; ?>
            <div class="card-group">
                <?php $__currentLoopData = $bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title"><?php echo e($bid->client->first_name); ?> <?php echo e($bid->client->last_name); ?></h1><br>
                                <p class="card-text"></p>
                                <form action="<?php echo e(route('bid.update',$bid['id'])); ?>" method="POST" style="display: inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <input type="checkbox" id="status" name="status" <?php echo e($bid->status?'checked':''); ?> onchange="this.form.submit()">
                                    <label for="status" class="font-weight-normal text-<?php echo e($bid->status ? 'green':'red'); ?>"><?php echo e($bid->status ? 'Выполнена':'Не выполнена'); ?></label>
                                </form>
                                <form action="<?php echo e(route('bid.destroy',$bid->id)); ?>" method="POST" style="display: inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="<?php echo e(route('bid.edit',$bid->id)); ?>" class="btn btn-primary btn-sm edit-btn"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\domains\Storm-site\resources\views/admin/bid/index.blade.php ENDPATH**/ ?>