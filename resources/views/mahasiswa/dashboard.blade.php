@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hi, {{Auth::user()->nama}}</h1>
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
                    @foreach(($dkbs[0]->mk_tawar) as $jadwal)
                        <tr>
                            <td>{{$jadwal->mata_kuliah_kode}}</td>
                            <td>{{$jadwal->mata_kuliah->nama}}</td>
                            <td>{{$jadwal->tipe}}</td>
                            <td>{{$jadwal->kelas}}</td>
                            <td>{{$jadwal->jadwal}}</td>
                            <td>{{$jadwal->ruangan}}</td>
                            <td>{{$jadwal->tahun_akademik_id}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{--    <div>--}}
                {{--        <form>--}}
                {{--            <div class="form-group row">--}}
                {{--                <label for="name" class="col-md-4 col-form-label">Program Studi</label>--}}

                {{--                <div class="col-md-6">--}}
                {{--                    <select name="program_studi_kode_prodi" id="program_studi_kode_prodi" class="form-control">--}}
                {{--                        <option value="">== Pilih Program Studi ==</option>--}}
                {{--                        @foreach ($mahasiswas as $id => $name)--}}
                {{--                            <option value="{{ $id }}">{{ $name }}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </form>--}}
                {{--    </div>--}}
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
@endsection
