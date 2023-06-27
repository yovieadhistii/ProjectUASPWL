<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;
use App\ProgramStudi;
use Illuminate\Support\Facades\Auth;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamk = MataKuliah::all();
        return view('matkul.dashboard',[
            'matkuls'=> $datamk
        ]);
    }

    public function lihatMataKuliah()
    {
        $prodi=Auth::user()->program_studi_kode_prodi;
        $kodeMataKuliah = MataKuliah::where('program_studi_kode_prodi', $prodi)->get();
        $kodeMK = MataKuliah::where('program_studi_kode_prodi', $prodi)->value('id');
        return view('matkul.dashboard', [
            'kodeMataKuliahs' => $kodeMataKuliah,
            'kodeProdi' => $prodi,
            'kodeMK' => $kodeMK,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($program_studi_kode_prodi)
    {
        return view('matkul.create', [
            'kodeMataKuliaha' => $program_studi_kode_prodi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $program_studi_kode_prodi)
    {
        $validatedData = validator($request->all(),[
            'kdMK' => 'required|string|max:100',
            'txtName' => 'required|string|max:100',
            'sks' => 'required|integer',
            'semester' => 'required|integer'
        ])->validate();
        $mk = new MataKuliah();
        $mk -> id = $validatedData['kdMK'];
        $mk -> nama = $validatedData['txtName'];
        $mk -> sks = $validatedData['sks'];
        $mk -> semester = $validatedData['semester'];
        $mk -> program_studi_kode_prodi = $program_studi_kode_prodi ;
        $mk -> save();
        return redirect(route('lihatMataKuliah',['kode'=>$program_studi_kode_prodi]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataKuliah  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $id): \Illuminate\Http\Response
    {
        dd($id);
//        $mataKuliah->id="IN455";
//        dd($mataKuliah);
        $mataKuliah->delete();
        return redirect(route('lihatMataKuliah'));
    }
}
