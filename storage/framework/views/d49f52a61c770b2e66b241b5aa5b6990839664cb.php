<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Mata Kuliah Tawar</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Membuat Mata Kuliah Tawar Baru</li>
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
                <form action="<?php echo e(route('storeMKTawar',['id' => $kodeMataKuliaha])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group ">
                        <label >Nama Mata Kuliah</label>
                        <br>
                        <select class="form-select form-select-lg w-100 py-2 px-1"  name="idMK">
                            <?php $__currentLoopData = $kodeMataKuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nama); ?>"><?php echo e($id); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
					<div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" id="kelas" name="kelas" class="form-control" required placeholder="Ex : A">
                    </div>
					<div class="form-group">
                        <label for="tahunAkademik">Tahun Akademik </label>
                        <input type="text" id="tahunAkademik" name="tahunAkademik" class="form-control"  placeholder="Ex : Genap 2023/2024" >
                    </div>
                    <div class="form-group">
                        <label for="jadwal">Jadwal</label>
                        <input type="text" id="jadwal" name="jadwal" class="form-control"  placeholder="Ex : Selasa, 07:00 - 09:30" >
                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" id="ruangan" name="ruangan" class="form-control"  placeholder="Ex : ADV 1" >
                    </div>
                    <div class="form-group">
                        <label for="maksPeserta">Maksimal Peserta</label>
                        <input type="text" id="maksPeserta" name="maksPeserta" class="form-control"  placeholder="Ex : 30" >
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe Mata Kuliah</label>
                        <br>
                        <select class="form-select form-select-lg w-100 py-2 px-1"  name="tipeMK">
                           <option value="Teori">Teori</option>
                           <option value="Praktikum">Praktikum</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <a href="<?php echo e(route('lihatMKTawar',['id' => $kodeMataKuliaha])); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Save</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projectUASPWL\resources\views/mktawar/create.blade.php ENDPATH**/ ?>