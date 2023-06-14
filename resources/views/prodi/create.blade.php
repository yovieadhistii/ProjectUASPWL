@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Program Studi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Membuat Program Studi Baru</li>
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
                <form action="{{ route('storeProdi') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kdProdi">Kode Prodi</label>
                        <input type="text" id="kdProdi" name="kdProdi" class="form-control" required placeholder="Ex : 72">
                    </div>
					<div class="form-group">
                        <label for="txtName">Nama Prodi</label>
                        <input type="text" id="txtName" name="txtName" class="form-control" required placeholder="Ex : Teknik Informatika">
                    </div>
					<div class="form-group">
                        <label for="txtWebsite">Website</label>
                        <input type="text" id="txtWebsite" name="txtWebsite" class="form-control"  placeholder="Ex : www.example.com">
                    </div>
                    <div class="text-right">
                        <a href="{{ route('dashboardProdi') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary " >Save</button>
                        
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection