@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Mata Kuliah Program Studi {{ $namaProgramStudia }}</h1>
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
			<a href="{{ route('createMataKuliah',['id' => $kodeProdi]) }}" class="btn btn-warning" role="button">Tambah Mata Kuliah Baru</a>
		</div>
		<div class="card">
			<div class="card-body p-3">
				<table class="table-hover mb-0 w-100" id="mk">
					<thead>
						<tr>
							<th>Kode </th>
							<th>Mata Kuliah </th>
							<th>SKS</th>
							<th>Semester</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($kodeMataKuliahs as $kodeMataKuliah)
							<tr>
								<td class="py-2">{{ $kodeMataKuliah->id }}</td>
								<td class="py-2">{{ $kodeMataKuliah->nama }}</td>
								<td class="py-2">{{ $kodeMataKuliah->sks }}</td>
								<td class="py-2">{{ $kodeMataKuliah->semester }}</td>
								<td class="text-center py-2">
									<a href="{{ route('editMataKuliah',['id' => $kodeProdi,'kodeMataKuliah' =>  $kodeMataKuliah->id]) }}" class="btn btn-outline-warning" role="button">Update</a>
                                    <a href="{{ route('deleteMataKuliah',['program_studi_kode_prodi' => $kodeProdi,'kodeMataKuliah' =>  $kodeMataKuliah->id]) }}" class="btn btn-outline-danger" role="button">Delete</a>								</td>
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
