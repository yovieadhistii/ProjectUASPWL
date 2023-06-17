<?php

namespace App\Http\Controllers;

use App\MkTawar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $data = User::with('mk_tawar.mata_kuliah')->where(['id'=>$user])->get();
//        dd($data);
        return view('mahasiswa.dashboard', [
            'dkbs' => $data,
        ]);
    }
    public function profil()
    {
        return view('mahasiswa.profil');
    }
    public function index_prodi()
    {
        return view('prodi.dashboard');
    }
    public function perwalian()
    {
        return view('mahasiswa.perwalian');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
//        dd($user);
        return view('mahasiswa/editprofil', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $request->file('image')->store('profile-photo');
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'phone'=>'required|max:255',
        ]);
        $user->nama = $validateData['nama'];
        $user->telepon = $validateData['phone'];
        $user->save();
        return redirect(route('dashboardmahasiswa'));
    }
    public function updatephoto(Request $request, User $user)
    {
//        dd($request);
//        return $request->file('image')->store('profile-photo');
        $validateData = $request->validate([
            'image'=>'required|image|file|max:1024'
        ]);
        $validateData['image']=$request->file('image')->store('profile-photo');
        $user->foto = $validateData['image'];
        $user->save();
        return redirect(route('editProfile',['id'=>$user->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
