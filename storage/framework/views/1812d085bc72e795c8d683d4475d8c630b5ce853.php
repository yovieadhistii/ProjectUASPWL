<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<?php echo $__env->yieldContent('addCss'); ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(Session::get('IsProdi')): ?>;
            <?php echo $__env->make('layouts.sidebarprodi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		<!-- /.content-wrapper -->

		<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
	<!-- Sweetalert -->
	<script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script>

	<?php echo $__env->yieldContent('addJavascript'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\projectUASPWL\resources\views/layouts/master.blade.php ENDPATH**/ ?>