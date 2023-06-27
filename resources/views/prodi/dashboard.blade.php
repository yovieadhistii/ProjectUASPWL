@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="my-3">Program Studi
                {{ $namaProgramStudi }}
            </h1>
        </div><!-- /.container-fluid -->
        <div class="container-fluid ">
            <div class="row d-flex justify-content-center align-items-center text-center ">
                <div class="col-md-4">
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                            <i class="fa-solid fa-user fa-2xl"></i>
                            <h3 class=" mt-4">Dosen</h3>
                            <h2>30</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                            <i class="fa-solid fa-users fa-2xl"></i>
                            <h3 class=" mt-4">Mahasiswa</h3>
                            <h2>@foreach ($counts as $count) {{ $count->jumlah_mahasiswa }} @endforeach</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{route('lihatMataKuliah',['kode' => $kodeMataKuliah]) }}">
                        <div class="card mx-auto" style="width: 25rem;">
                            <div class="card-body">
                                <i class="fa-solid fa-book fa-2xl"></i>
                                <h3 class=" mt-4">Mata Kuliah</h3>
                                <h2>@foreach ($counts as $count) {{ $count->jumlah_mata_kuliah }} @endforeach</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid my-4">
            <div class="card " style="width: 100%;">
                <div class="row m-3  d-flex justify-content-center align-items-center">
                    <div class="col-md-7 ">
                        <h1>Fakultas Teknologi Informasi </h1>
                        <h3>Universitas Kristen Maranatha </h3>
                        <p>Selamat datang di Fakultas Teknologi Informasi. Kami adalah salah satu fakultas di Universitas Kreisten Maranatha yang berfokus pada pendidikan dan penelitian di bidang teknologi informasi. FTI merupakan fakultas yang diakui dan dihormati secara nasional maupun internasional.</p>
                        <p>FTI Universitas Kreisten Maranatha menyediakan fasilitas modern dan lengkap untuk mendukung kegiatan belajar mengajar dan penelitian, antara lain :</p>
                        <ol>
                            <li>Laboratorium komputer dengan perangkat keras dan perangkat lunak terkini.</li>
                            <li>Perpustakaan yang menyediakan koleksi buku, jurnal, dan sumber daya digital terkait teknologi informasi.</li>
                            <li>Ruang kelas yang dilengkapi dengan teknologi audiovisual.</li>
                            <li>Ruang seminar dan ruang diskusi untuk kegiatan akademik dan kolaborasi.</li>
                        </ol>
                        <p>Lulusan FTI Universitas Kreisten Maranatha memiliki prospek karir yang cerah di industri teknologi informasi, seperti:</p>
                        <ul>
                            <li>Perancangan dan pengembangan perangkat lunak.</li>
                            <li>Manajemen sistem informasi.</li>
                            <li>Analisis data dan kecerdasan buatan.</li>
                            <li>Konsultasi teknologi informasi.</li>
                            <li>Keamanan dan jaringan komputer.</li>
                            <li>Pengembangan aplikasi web dan mobile.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="{{URL::asset('/img/logo_fit.png')}}" style="width:100%;height:auto;max-width:300px;max-height:300px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
