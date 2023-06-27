<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <?php echo $__env->yieldContent('addCss'); ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <?php echo e(config('app.name')); ?>

        </div>
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.login-box -->
</body>

</html><?php /**PATH C:\xampp\htdocs\projectUASPWL\resources\views/auth/master.blade.php ENDPATH**/ ?>