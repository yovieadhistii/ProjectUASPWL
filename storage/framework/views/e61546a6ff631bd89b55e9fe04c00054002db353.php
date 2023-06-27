<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		
        <form method="POST" action="<?php echo e(route('tambahDKBS')); ?>">
            <?php echo csrf_field(); ?>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Semester</th>
                <th scope="col">Tipe</th>
                <th scope="col">Jadwal</th>
            </tr>
        <?php $__currentLoopData = $perwalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matkul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($detail->mata_kuliah_kode); ?></td>
                        <td><?php echo e($detail->mata_kuliah->nama); ?></td>
                        <td><?php echo e($detail->kelas); ?></td>
                        <td><?php echo e($detail->mata_kuliah->semester); ?></td>
                        <td><?php echo e($detail->tipe); ?></td>
                        <td><?php echo e($detail->jadwal); ?></td>
                    </tr>
                    <input type = "hidden" name ="<?php echo e($detail->id); ?>" value = "<?php echo e($detail->id); ?>" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
            <button type="submit" class="btn btn-primary my-3">Submit</button>

        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/mahasiswa/checkoutperwalian.blade.php ENDPATH**/ ?>