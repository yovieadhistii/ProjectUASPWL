<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
	<?php echo $__env->yieldContent('addCss'); ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">
        <?php if(Auth::user()->role=='prodi'): ?>;
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#tabelMahasiswa').DataTable();
        $('#mkTawar').DataTable();
        $('#mk').DataTable();



    });
</script>
</html>
<?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/layouts/master.blade.php ENDPATH**/ ?>