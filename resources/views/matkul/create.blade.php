@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Mata Kuliah</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Membuat Mata Kuliah Baru</li>
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
                <form action="{{ route('storeMataKuliah',['id' => $kodeMataKuliaha])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kdMK">Kode Mata Kuliah</label>
                        <input type="text" id="kdMK" name="kdMK" class="form-control" required placeholder="Ex : IN211">
                    </div>
					<div class="form-group">
                        <label for="txtName">Nama Mata Kuliah</label>
                        <input type="text" id="txtName" name="txtName" class="form-control" required placeholder="Ex : Pemograman Web Lanjut">
                    </div>
					<div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" id="sks" name="sks" class="form-control"  placeholder="Ex : 4" max="4">
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="semester" id="semester" name="semester" class="form-control"  placeholder="Ex : 4" max="8">
                    </div>
                    <div class="text-right">
                        <a href="{{ route('lihatMataKuliah',['kode' => $kodeMataKuliaha])}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Save</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection