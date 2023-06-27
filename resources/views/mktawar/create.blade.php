@extends('layouts.master')

@section('content')
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
                <form action="{{ route('storeMKTawar',['id' => $kodeMataKuliaha])}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label >Nama Mata Kuliah</label>
                        <br>
                        <select class="form-select form-select-lg w-100 py-2 px-1"  name="idMK">
                            @foreach ($kodeMataKuliahs as $id => $nama)
                                <option value="{{ $nama }}">{{ $id }}</option>
                            @endforeach
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
                        <a href="{{ route('lihatMKTawar',['id' => $kodeMataKuliaha])}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Save</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection