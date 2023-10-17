<?php $__env->startSection('content'); ?>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: <?php echo config('shop.name'); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Haooo\Web Prog\ProjectFitwalk\Modules/Shop\Resources/views/index.blade.php ENDPATH**/ ?>