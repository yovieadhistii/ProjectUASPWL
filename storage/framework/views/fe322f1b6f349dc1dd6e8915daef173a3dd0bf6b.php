<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hi, <?php echo e(Auth::user()->nama); ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card-body p-0">
                <table class="table table-hover mb-0" id="tabelMahasiswa">
                    <thead>
                    <tr>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Tipe</th>
                        <th>Kelas</th>
                        <th>Jadwal</th>
                        <th>Ruangan</th>
                        <th>Tahun Ajaran</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = ($dkbs[0]->mk_tawar); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($jadwal->mata_kuliah_kode); ?></td>
                            <td><?php echo e($jadwal->mata_kuliah->nama); ?></td>
                            <td><?php echo e($jadwal->tipe); ?></td>
                            <td><?php echo e($jadwal->kelas); ?></td>
                            <td><?php echo e($jadwal->jadwal); ?></td>
                            <td><?php echo e($jadwal->ruangan); ?></td>
                            <td><?php echo e($jadwal->tahun_akademik_id); ?></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                
                
                
                

                
                
                
                
                
                
                
                
                
                
                
            </div>

            <div class="m-4">
                <div class = "card" style="width: 75rem; padding: 20px">
                    <h6>
                        Gagal perwalian dapat dikarenakan:
                        <li>Perwalian di luar jadwal yang ditentukan</li>
                        <li>Kewajiban keuangan mahasiswa belum terpenuhi</li>
                        <li>Tidak terdaftar sebagai mahasiswa aktif </li>
                        <li>Belum mengembalikan pinjaman buku</li>

                        Informasi Perwalian:
                        <li>Mata kuliah berwarna merah: mata kuliah dengan prasyarat / mata kuliah yang belum diambil </li>
                        <li>Mata kuliah berwarna hitam: mata kuliah yang sudah diambil</li>
                        <li>Mengacu Surat No 068/WRKPSTI/UKM/INT/XII/2021, khusus Semester Genap Tahun Ajaran 2021/2022 maka Admin Fee 1% bagi mahasiswa yang mengambil skema pembayaran cicilan ditiadakan.</li>
                        <li>Bagi mahasiswa yang akan mengajukan Sidang diharapkan memilih skema Pembayaran Penuh. </li>
                    </h6>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/mahasiswa/dashboard.blade.php ENDPATH**/ ?>