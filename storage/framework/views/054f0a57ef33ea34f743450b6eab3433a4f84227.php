<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Mata Kuliah Tawar Program Studi <?php echo e($namaProgramStudia); ?></h1>
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
                <a href="<?php echo e(route('createMKTawar',['id' => $programStudiKode])); ?>" class="btn btn-warning" role="button">Tambah Mata Kuliah Tawar Baru</a>
            </div>

            <div class="card my-3 ">
                <form action="<?php echo e(route('updateStatus')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <select class="form-select" name="status" onchange="this.form.submit()">
                        <option value="Genap 2022/2023" <?php echo e($status === 'Genap 2022/2023' ? 'selected' : ''); ?>>Genap 2022/2023</option>
                        <option value="Ganjil 2023/2024" <?php echo e($status === 'Ganjil 2023/2024' ? 'selected' : ''); ?>>Ganjil 2023/2024</option>
                    </select>
                </form>
            </div>

            <div class="card">
                <div class="card-body p-3">
                    <table class="table-hover mb-0 w-100" id="mkTawar">
                        <thead>
                        <tr>
                            <th style="font-size:1em;">Mata Kuliah </th>
                            <th style="font-size:1em;">Nama</th>
                            <th style="font-size:1em;">Kelas</th>
                            <th style="font-size:1em;">Tahun Akademik</th>
                            <th style="font-size:1em;">Jadwal</th>
                            <th style="font-size:1em;">Ruangan</th>
                            <th style="font-size:1em;">Max Peserta</th>
                            <th style="font-size:1em;">Tipe</th>
                            <th style="font-size:1em;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $mktawars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mktawar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="py-2"><?php echo e($mktawar->mata_kuliah_kode); ?></td>
                                <td class="py-2"><?php echo e($mktawar->nama); ?></td>
                                <td class="py-2"><?php echo e($mktawar->kelas); ?></td>
                                <td class="py-2"><?php echo e($mktawar->tahun_akademik_id); ?></td>
                                <td class="py-2"><?php echo e($mktawar->jadwal); ?></td>
                                <td class="py-2"><?php echo e($mktawar->ruangan); ?></td>
                                <td class="py-2"><?php echo e($mktawar->max_peserta); ?></td>
                                <td class="py-2"><?php echo e($mktawar->tipe); ?></td>
                                <td class="text-center py-2">
                                    <a href="<?php echo e(route('deleteMKTawar',['id' =>$mktawar->mata_kuliah_kode,'kelas' =>$mktawar->kelas,'tipe' =>$mktawar->tipe])); ?>" class="btn btn-outline-danger" role="button">Delete</a>								</td>
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/mktawar/dashboard.blade.php ENDPATH**/ ?>