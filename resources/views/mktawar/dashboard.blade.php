@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Mata Kuliah Tawar Program Studi {{ $namaProgramStudia }}</h1>
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
			<a href="{{ route('createMKTawar',['id' => $programStudiKode]) }}" class="btn btn-warning" role="button">Tambah Mata Kuliah Tawar Baru</a>
		</div>

		<div class="card my-3 ">
				<form action="{{ route('updateStatus') }}" method="POST">
					@csrf
					<select class="form-select" name="status" onchange="this.form.submit()">
						<option value="Genap 2022/2023" {{ $status === 'Genap 2022/2023' ? 'selected' : '' }}>Genap 2022/2023</option>
						<option value="Ganjil 2023/2024" {{ $status === 'Ganjil 2023/2024' ? 'selected' : '' }}>Ganjil 2023/2024</option>
					</select>
				</form>
		</div>

		<div class="card">
			<div class="card-body p-3">
				<table class="table-hover mb-0 w-100">
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
						</tr>
					</thead>
					<tbody>
						@foreach ($mktawars as $mktawar)
							<tr>
								<td class="py-2">{{ $mktawar->mata_kuliah_kode  }}</td>
								<td class="py-2">{{ $mktawar->nama  }}</td>
								<td class="py-2">{{ $mktawar->kelas }}</td>
								<td class="py-2">{{ $mktawar->tahun_akademik_id }}</td>
                                <td class="py-2">{{ $mktawar->jadwal  }}</td>
								<td class="py-2">{{ $mktawar->ruangan }}</td>
								<td class="py-2">{{ $mktawar->max_peserta }}</td>
                                <td class="py-2">{{ $mktawar->tipe }}</td>
								<td class="text-center py-2">
								<a href="{{ route('deleteMKTawar',['id' =>$mktawar->mata_kuliah_kode,'kelas' =>$mktawar->kelas,'tipe' =>$mktawar->tipe]) }}" class="btn btn-outline-danger" role="button">Delete</a>								</td>
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

