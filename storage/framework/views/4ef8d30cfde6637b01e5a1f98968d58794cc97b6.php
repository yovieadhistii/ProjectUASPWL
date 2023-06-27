<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Mata Kuliah Program Studi <?php echo e($namaProgramStudia); ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="card-header text-right">
			<a href="<?php echo e(route('createMataKuliah',['id' => $kodeProdi])); ?>" class="btn btn-warning" role="button">Tambah Mata Kuliah Baru</a>
		</div>
		<div class="card">
			<div class="card-body p-3">
				<table class="table-hover mb-0 w-100" id="mk">
					<thead>
						<tr>
							<th>Kode </th>
							<th>Mata Kuliah </th>
							<th>SKS</th>
							<th>Semester</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $kodeMataKuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kodeMataKuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="py-2"><?php echo e($kodeMataKuliah->id); ?></td>
								<td class="py-2"><?php echo e($kodeMataKuliah->nama); ?></td>
								<td class="py-2"><?php echo e($kodeMataKuliah->sks); ?></td>
								<td class="py-2"><?php echo e($kodeMataKuliah->semester); ?></td>
								<td class="text-center py-2">
									<a href="<?php echo e(route('editMataKuliah',['id' => $kodeProdi,'kodeMataKuliah' =>  $kodeMataKuliah->id])); ?>" class="btn btn-outline-warning" role="button">Update</a>
                                    <a href="<?php echo e(route('deleteMataKuliah',['program_studi_kode_prodi' => $kodeProdi,'kodeMataKuliah' =>  $kodeMataKuliah->id])); ?>" class="btn btn-outline-danger" role="button">Delete</a>								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>


	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/matkul/dashboard.blade.php ENDPATH**/ ?>