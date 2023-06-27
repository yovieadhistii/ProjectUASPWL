<?php

namespace App\Http\Controllers;

use App\MkTawar;
use App\User;
use App\ProgramStudi;
Use App\Count;
Use App\MataKuliah;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
    public function tambah()
    {

//        dd($data);
        return view('prodi.register');
    }
    public function add(Request $request, User $user)
    {
        $validateData = validator($request->all(), [
            'id' => 'required|max:255',
            'nama' => 'required|max:255',
            'email'=>'required|max:255',
            'alamat'=>'required|max:255',
            'kota'=>'required|max:255',
            'agama' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'telepon'=>'required|max:255',
            'tlahir'=>'required|max:255',
            'role'=>'required|max:255',
        ])->validate();

        $prodi=Auth::user()->program_studi_kode_prodi;
        $user = new User();
        $user->id = $validateData['id'];
        $user->nama = $validateData['nama'];
        $user->email = $validateData['email'];
        $user->alamat = $validateData['alamat'];
        $user->kota = $validateData['kota'];
        $user->agama = $validateData['agama'];
        $user->tanggal_lahir = $validateData['tlahir'];
        $user->telepon = $validateData['telepon'];
        $user->role = $validateData['role'];
        $user->jenis_kelamin = $validateData['kelamin'];
        $user->program_studi_kode_prodi = $prodi;
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect(route('dashboardprodi'));
    }
    public function profil()
    {

        return view('mahasiswa.profil');
    }
    public function index_prodi()
    {
        $user = Auth::user();
        $data = Count::all();
        $programStudiKode = $user->program_studi_kode_prodi;
        $namaProgramStudi = ProgramStudi::where('kode_prodi', $programStudiKode)->value('nama');
        $kodeMataKuliah = ProgramStudi::where('kode_prodi', $programStudiKode)->value('kode_prodi');

        return view('prodi.dashboard',[
            'counts'=> $data,
            'namaProgramStudi' => $namaProgramStudi,
            'kodeMataKuliah' =>  $kodeMataKuliah,
        ]);

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
        $validateData = validator($request->all(), [
            'nama' => 'required|max:255',
            'kota'=>'required|max:255',
            'agama' => 'required|max:255',
            'alamat'=>'required|max:255',
            'email'=>'required|max:255',
            'telepon'=>'required|max:255',
            'tlahir'=>'required|max:255',
        ])->validate();
        $user->nama = $validateData['nama'];
        $user->kota = $validateData['kota'];
        $user->alamat = $validateData['alamat'];
        $user->agama = $validateData['agama'];
        $user->email = $validateData['email'];
        $user->telepon = $validateData['telepon'];
        $user->tanggal_lahir = $validateData['tlahir'];
        $user->save();
        return redirect(route('editProfile',['id'=>$user->id]));
    }
    public function updatephoto(Request $request, User $user)
    {

        $validateData = $request->validate([
            'image'=>'required|'
        ]);
        if($request->file('image')){
            Storage::delete($request->oldImage);
        }
        $validateData['image']=$request->file('image')->store('profile-photo');
        $user->foto = $validateData['image'];
        $user->save();
        return redirect(route('editProfile',['id'=>$user->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
        Storage::delete($user->foto);
        $user->foto = '';
        $user->save();
        return redirect(route('editProfile',['id'=>$user->id]));
    }
}
