@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Profile</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboardmahasiswa')}}">Dashboard</a></li>

				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
        <section style="background-color: #eee;">
            <div class="content">
                <div class="container-fluid">

                    {{-- main content here --}}


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4" style="height: 520px">
                                <div class="card-body text-center">
                                    <img src="{{asset('img/user-photo-default.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 150px;">
                                    <h5 class="my-3">{{Auth::user()->nama}}</h5>
                                    <p class="text-muted mb-1">{{Auth::user()->id}}</p>
                                    <p class="text-muted mb-4">{{Auth::user()->role}}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        {{--                                    <button action="{{route('editProfile',['id'=>Auth::user()->id])}}" type="button" class="btn btn-primary">Edit Profile</button>--}}
                                        <a href="{{route('editProfile',['id'=>Auth::user()->id])}}" class="btn btn-primary" role="button">Edit Profile</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Lengkap</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->nama}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">NRP </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->id}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->alamat}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kota</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->kota}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->telepon}}</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->tanggal_lahir}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Jenis Kelamin</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->jenis_kelamin}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Agama </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{Auth::user()->agama}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.container-fluid -->
                    </div>
        </section>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
