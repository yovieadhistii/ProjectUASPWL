@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Genre Form</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Genre</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="card-header text-right">
			<a href="{{ route('createGenre') }}" class="btn btn-warning" role="button">Open Genre Form</a>
		</div>
		<div class="card">
			<div class="card-body p-0">
				<table class="table table-hover mb-0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($genres as $genre)
							<tr>
								<td>{{ $genre->id }}</td>
								<td>{{ $genre->name }}</td>
								<td>
									<a href="{{ route('editGenre',['id' => $genre->id]) }}" class="btn btn-warning" role="button">Edit</a>
									<a href="{{ route('deleteGenre',['id' => $genre->id]) }}" class="btn btn-danger" role="button">Delete</a>
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