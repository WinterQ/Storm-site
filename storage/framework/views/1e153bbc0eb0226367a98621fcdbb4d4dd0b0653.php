

<?php $__env->startSection('content'); ?>
    <div class="body-m-c">
        <div class="container">
            <div class="row m-3">
                <div class="col-md-1"><img src="<?php echo e('img/basket.png'); ?>" alt="" class="w-100"></div>
                <div class="col"><h1>Корзина</h1></div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Автомобиль</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Характеристика</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена (руб.)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><p>Skoda</p></td>
                    <td><img src="<?php echo e('/img/Cars/Skoda/skoda-kodiaq.jpg'); ?>" class="" width="300" alt=""></td>
                    <td>Цвет: синий</td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="number" value="1" min="0" max="10" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            <div class="input-group-prepend">
                                <span class="input-group-text">шт.</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="number" disabled class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\Storm-site\resources\views/basket.blade.php ENDPATH**/ ?>