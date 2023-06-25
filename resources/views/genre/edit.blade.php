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
					<li class="breadcrumb-item "><a href="{{route('genreList')}}">Genre List</a></li>
                    <li class="breadcrumb-item active">Genre Form</li>
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
                <form action="{{ route('updateGenre',['id'=>$genre->id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="txtId">Genre ID</label>
                        <input type="text" id="txtId" name="txtId" class="form-control" required placeholder="Genre ID" readonly value="{{ $genre->id }}">
                    </div>
                    <div class="form-group">
                        <label for="txtName">Genre Name</label>
                        <input type="text" id="txtName" name="txtName" class="form-control" required placeholder="Genre Name" value="{{ $genre->name }}">
                    </div>
                    <div class="text-right">
                        <a href="{{ route('genreList') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Update</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection