<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Perwalian</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboardmahasiswa')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Perwalian</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <?php echo e($tahun); ?>

		
        <form method="POST" action="<?php echo e(route('checkoutDKBS')); ?>" onsubmit="doValidate">
            <?php echo csrf_field(); ?>
        <?php if(($status[0]->mk_tawar->where('tahun_akademik_id',$tahun))=='[]'): ?>
        <div class="accordion" id="accordionExample">
        <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester=>$mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo e($semester); ?>" aria-expanded="true" aria-controls="collapseOne">
                            Semester <?php echo e($semester); ?>

                        </button>
                    </h2>
                    <div id="<?php echo e($semester); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <div class="accordion" id="s<?php echo e($semester); ?>">
                                <?php $__currentLoopData = $matkuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matkul=>$jadwals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(($jadwals[0]->mata_kuliah->semester)==$semester): ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo e($jadwals[0]->id); ?>" aria-expanded="true" aria-controls="<?php echo e($jadwals[0]->id); ?>">
                                                    <?php echo e($matkul); ?> <?php echo e($jadwals[0]->mata_kuliah->nama); ?>

                                                </button>
                                            </h2>
                                            <div id="<?php echo e($jadwals[0]->id); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                                                <div class="accordion-body">
                                                    <?php $__currentLoopData = ($jadwals->groupBy('kelas')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas=>$jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <p>Kelas <?php echo e($kelas); ?></p>
                                                        <p class="text-danger">Tersedia : <?php echo e(($jadwal[0]->max_peserta) - count($jadwal[0]->user)); ?></p>
                                                        <div class="form-check">
                                                            <input class="<?php echo e($matkul); ?> form-check-input" type="checkbox" value="<?php echo e($kelas); ?>"  name="<?php echo e($matkul); ?>" data-sks="<?php echo e($jadwal[0]->mata_kuliah->sks); ?>" onclick="pilih(this);">
                                                            <table class="table">
                                                                <tr>
                                                                    <th scope="col">Tipe</th>
                                                                    <th scope="col">Jadwal</th>
                                                                    <th scope="col">Ruangan</th>
                                                                </tr>
                                                            <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($detail->tipe); ?></td>
                                                                    <td><?php echo e($detail->jadwal); ?></td>
                                                                    <td><?php echo e($detail->ruangan); ?></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </table>

                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>


                </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
                <button type="submit" class="btn btn-primary my-3">Checkout</button>
        <?php else: ?>
            <h1>Anda Sudah Melakukan Perwalian</h1>
        <?php endif; ?>

        </form>
            <!-- /.container-fluid -->
    </div>
</div>
<!-- /.content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(".cb").change(function() {
        //
        //     $(".cb").prop('checked', false);
        //     // if($(this).prop('checked')==false){
        //     //     $(this).prop('checked', true);
        //     // }
        // });
        let sks=0;
        function pilih(kelas) {
            if($(kelas).prop('checked')==false){
                // alert("aa")
                $(kelas).prop('checked', false);
                sks-=parseInt($(kelas).data('sks'))
            }
            else{
                // alert("bb")
                $name=$(kelas).attr("name")
                $('.'+$name).prop('checked', false);
                $(kelas).prop('checked', true);
                sks+=parseInt($(kelas).data('sks'))

            }


        };
        function doValidate(event) {
            if(sks>24){
                event.preventDefault();
            }

            // validate your inputs
        };


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/mahasiswa/perwalian.blade.php ENDPATH**/ ?>