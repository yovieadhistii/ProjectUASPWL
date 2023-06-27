<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\MataKuliah;
use Illuminate\Http\Request;
use App\ProgramStudi;
Use App\User;
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

    public function lihatMataKuliah($program_studi_kode_prodi)
    {
        $user = Auth::user();
        $programStudiKode = $user->program_studi_kode_prodi;
        $kodeMataKuliah = MataKuliah::where('program_studi_kode_prodi', $program_studi_kode_prodi)->get();
        $namaProgramStudi = ProgramStudi::where('kode_prodi', $programStudiKode)->value('nama');
        $kodeMK = MataKuliah::where('program_studi_kode_prodi', $program_studi_kode_prodi)->value('id');
        return view('matkul.dashboard', [
            'kodeMataKuliahs' => $kodeMataKuliah,
            'kodeProdi' => $program_studi_kode_prodi,
            'kodeMK' => $kodeMK,
            'namaProgramStudia' => $namaProgramStudi
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
        $mk -> program_studi_kode_prodi = $program_studi_kode_prodi;
        $mk -> save();
        return redirect(route('lihatMataKuliah',['id'=>$program_studi_kode_prodi]));
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
    public function edit($program_studi_kode_prodi, $kodeMataKuliahi )
    {
        $kodeMataKuliaha = MataKuliah::where('id', $kodeMataKuliahi)->where('program_studi_kode_prodi', $program_studi_kode_prodi)->first();

        if ($kodeMataKuliaha) {
            return view('matkul.edit', [
                'kodeMataKuliaha' => $kodeMataKuliaha,
                'kodeMataKuliahs' => $program_studi_kode_prodi,
                'idhaha'=>$kodeMataKuliahi,
            ]);
        }

        // dd($program_studi_kode_prodi, $kodeMataKuliahi,$kodeMataKuliaha );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $program_studi_kode_prodi, $kodeMataKuliahi, MataKuliah $mk)
    {
        $validatedData = validator($request->all(), [
            'kdMK' => 'required|string|max:100',
            'txtName' => 'required|string|max:100',
            'sks' => 'required|integer',
            'semester' => 'required|integer'
        ])->validate();

        $mk->where('id', $kodeMataKuliahi)->update([
            'nama' => $validatedData['txtName'],
            'sks' => $validatedData['sks'],
            'semester' => $validatedData['semester'],
            'program_studi_kode_prodi' => $program_studi_kode_prodi
        ]);

        return redirect(route('lihatMataKuliah', ['kode' => $program_studi_kode_prodi]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($program_studi_kode_prodi, $kodeMataKuliah)
    {
        // dd($program_studi_kode_prodi, $kodeMataKuliah);
        $mataKuliah = MataKuliah::where('program_studi_kode_prodi', $program_studi_kode_prodi)
            ->where('id', $kodeMataKuliah);

        if ($mataKuliah) {
            $mataKuliah->delete();
        }

        return redirect()->route('lihatMataKuliah', ['program_studi_kode_prodi' => $program_studi_kode_prodi]);
    }
}
