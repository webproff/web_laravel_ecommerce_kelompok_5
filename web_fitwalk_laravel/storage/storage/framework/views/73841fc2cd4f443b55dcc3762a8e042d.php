<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>FitWalk : Official Site</title>
    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/sass/app.scss',
        'resources/js/app.js',

        'resources/views/themes/projectfitwalk/assets/css/main.css',
        'resources/views/themes/projectfitwalk/assets/plugins/jqueryui/jquery-ui.css',

        'resources/views/themes/projectfitwalk/assets/js/main.js',
        'resources/views/themes/projectfitwalk/assets/plugins/jqueryui/jquery-ui.min.js',
    ]); ?>
</head>
<body>
    <?php echo $__env->make('themes.projectfitwalk.shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('themes.projectfitwalk.shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Haooo\Web Prog\ProjectFitwalk\resources\views/themes/projectfitwalk/layouts/app.blade.php ENDPATH**/ ?>