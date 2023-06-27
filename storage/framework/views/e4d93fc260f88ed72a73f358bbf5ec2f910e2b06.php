<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit Mata Kuliah</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Edit Mata Kuliah</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		<div class="card">
            <div class="card-body px-4">
                <form action="<?php echo e(route('updateMataKuliah',['id' => $kodeMataKuliahs,'kodeMataKuliah' =>  $idhaha])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="kdMK">Kode Mata Kuliah</label>
                        <input type="text" id="kdMK" name="kdMK" class="form-control" required value="<?php echo e($kodeMataKuliaha->id); ?>" readonly>
                    </div>
					<div class="form-group">
                        <label for="txtName">Nama Mata Kuliah</label>
                        <input type="text" id="txtName" name="txtName" class="form-control" required value="<?php echo e($kodeMataKuliaha->nama); ?>"">
                    </div>
					<div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" id="sks" name="sks" class="form-control"  value="<?php echo e($kodeMataKuliaha->sks); ?>" max="4">
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="number" id="semester" name="semester" class="form-control" value="<?php echo e($kodeMataKuliaha->semester); ?>" max="8">
                    </div>
                    <div class="form-group">
                        <label for="kodeProdi">Kode Prodi</label>
                        <input type="text" id="kodeProdi" name="kodeProdi" class="form-control" required value="<?php echo e($kodeMataKuliaha->program_studi_kode_prodi); ?>" readonly>
                    </div>
                    <div class="text-right">
                        <a href="<?php echo e(route('lihatMataKuliah',['kode' => $kodeMataKuliahs])); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Save</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projectUASPWL\resources\views/matkul/edit.blade.php ENDPATH**/ ?>