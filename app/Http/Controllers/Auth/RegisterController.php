<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|max:255',
            'email'=>'required|max:255',
            'alamat'=>'required|max:255',
            'kota'=>'required|max:255',
            'agama' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'telepon'=>'required|max:255',
            'tlahir'=>'required|max:255',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data): User
    {
        $prodi=Auth::user()->program_studi_kode_prodi;
        return User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'alamat'=>$data['alamat'],
            'kota'=>$data['kota'],
            'agama' => $data['agama'],
            'role' => $data['role'],
            'kelamin' => $data['kelamin'],
            'program_studi_kode_prodi'=> $prodi,
            'password' => Hash::make($data['password']),
        ]);
    }
}
