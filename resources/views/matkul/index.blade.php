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
			<a href="{{ route('createMK') }}" class="btn btn-warning" role="button">Tambah Mata Kuliah Baru</a>
		</div>
		<div class="card">
			<div class="card-body p-3">
				<table class="table-hover mb-0 w-100">
					<thead>
						<tr>
							<th style="font-size:2em;">Kode </th>
							<th style="font-size:2em;">Mata Kuliah </th>
							<th style="font-size:2em;">SKS</th>
							<th style="font-size:2em;">Semester</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($matkuls as $matkul)
							<tr>
								<td class="py-2">{{ $matkul->kodes }}</td>
								<td class="py-2">{{ $matkul->nama }}</td>
								<td class="py-2">{{ $matkul->sks }}</td>
								<td class="py-2">{{ $matkul->semester }}</td>
								<td class="text-center py-2">
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