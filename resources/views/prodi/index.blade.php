@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard Program Studi</h1>
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
			<a href="{{ route('createProdi') }}" class="btn btn-warning" role="button">Tambah Prodi Baru</a>
		</div>
		<div class="card">
			<div class="card-body p-3">
				<table class="table-hover mb-0 w-100">
					<thead>
						<tr>
							<th style="font-size:2em;">Kode </th>
							<th style="font-size:2em;">Nama </th>
							<th style="font-size:2em;">Website</th>
							<th style="font-size:2em; text-align:center;">Option</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($prodis as $prodi)
							<tr>
								<td class="py-2">{{ $prodi->kode_prodi }}</td>
								<td class="py-2">{{ $prodi->nama }}</td>
								<td class="py-2">{{ $prodi->website }}</td>
								<td class="text-center py-2">
									<a href="{{ route('lihatMK') }}" class="btn btn-outline-primary" role="button">Lihat Mata Kuliah</a>
									<a href="/" class="btn btn-outline-warning" role="button">Update</a>
									<a href="/" class="btn btn-outline-danger" role="button">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>	
		

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection