@extends('auth.master')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Register') }}</p>

        <form action="{{route('register')}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Full name" name="nama" value="{{ old('name') }}" required autocomplete="name"
                    autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{old('email')}}" placeholder="Email" required autocomplete="email">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                       value="{{old('alamat')}}" placeholder="alamat" required autocomplete="alamat">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('alamat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota"
                       value="{{old('kota')}}" placeholder="kota" required autocomplete="kota">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('kota')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="date" class="form-control @error('tlahir') is-invalid @enderror" name="tlahir"
                       value="{{old('tlahir')}}" placeholder="tlahir" required autocomplete="tlahir">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('tlahir')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <select class="form-select @error('kelamin') is-invalid @enderror" name="kelamin" aria-label="Default select example">
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                </select>
            </div>
            @error('kelamin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                       value="{{old('telepon')}}" placeholder="telepon" required autocomplete="telepon">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('telepon')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama"
                       value="{{old('agama')}}" placeholder="agama" required autocomplete="agama">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('agama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
{{--                <input id="email" type="text" class="form-control @error('role') is-invalid @enderror" name="role"--}}
{{--                       value="{{old('role')}}" placeholder="role" required autocomplete="role">--}}
                <select class="form-select @error('role') is-invalid @enderror" name="role" aria-label="Default select example">
                    <option value="1">Mahasiswa</option>
                    <option value="2">Prodi</option>
                </select>
            </div>
            @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                    name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

{{--        @if (Route::has('login'))--}}
{{--        <hr>--}}
{{--        <p class="mb-0 text-center">--}}
{{--            <a href="{{ route('login') }}" class="text-center">{{ __('Sudah punya akun? Login sekarang') }}</a>--}}
{{--        </p>--}}
{{--        @endif--}}
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
