@extends('layouts.master')

@section('addCss')
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboardmahasiswa')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('profil')}}">Profile</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->

                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                @if($user->foto)
                                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('storage/'.$user->foto)}}" alt="">
                                @else
                                    <img src="{{asset('img/user-photo-default.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 150px;">

                                @endif

                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#upload">Upload new image</button>

                            </div>
                        </div>

                        <!-- Modal-->
                        <div class="modal" tabindex="-1" role="dialog" id="upload">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form enctype="multipart/form-data" action="{{ route('updateProfilePhoto', ['id' => $user->id])}}" method="post">
                                        @csrf
                                        <div class="modal-body">

                                            <label for="image" class="form-label">Default file input example</label>
                                            <input class="form-control" type="file" id="image" name="image">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Profile Details</div>
                            <div class="card-body">
                                <form action="{{ route('updateProfile', ['id' => $user->id])}}" method="post">
                                    @csrf
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="nama">Nama</label>
                                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Enter your username" value="{{$user->nama}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="small mb-1" for="alamat">Alamat</label>
                                        <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Enter your email address" value="{{$user->alamat}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">Alamat email</label>
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email address" value="{{$user->email}}">
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="phone">Telepon</label>
                                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number" value="{{$user->telepon}}">
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="birthday">Tanggal Lahir</label>
                                            <input class="form-control" id="birthday" name="birthday" type="text" name="birthday" placeholder="Enter your birthday" value="{{$user->tanggal_lahir}}">
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
