<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use App\MkTawar;
use App\TahunAkademik;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerwalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $usera=Auth::user();
        $programStudiKode = $usera->program_studi_kode_prodi;
        $tahun = TahunAkademik::where('status','aktif')->first('id')->id;
        $matkul = MkTawar::with('mata_kuliah','user')->where('tahun_akademik_id',$tahun)->get()->groupBy('mata_kuliah_kode');
        $matkul2 = MkTawar::join('mata_kuliah', 'mata_kuliah.id', '=', 'mk_tawar.mata_kuliah_kode') ->select("*")->where('program_studi_kode_prodi', $programStudiKode)->where('tahun_akademik_id',$tahun) ->get()->groupBy('mata_kuliah_kode');
        // $semester=MataKuliah::all()->groupBy('semester');
        $semester = MataKuliah::all()->groupBy('semester')->sortBy(function ($items, $key) {
            return $key;
        });

        $semester->values()->all();
        $status=User::with('mk_tawar')->where('id',$user)->get();
        //dd( $user,$status,$matkul2,$tahun,$semester);
        return view('mahasiswa.perwalian', [
            'tahun' => $tahun,
            'matkuls'=> $matkul2,
            'semesters'=>$semester,
            'status'=>$status
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $perwalian=array();
        foreach ($request->except('_token') as $key => $part) {
            $perwalian[]=MkTawar::with('mata_kuliah')->where('mata_kuliah_kode',$key)->where('kelas',$part)->get();
        }
        return view('mahasiswa.checkoutperwalian', [
            'perwalian' => $perwalian,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        foreach ($request->except('_token') as $key => $part) {
            $user->mk_tawar()->attach($part);
        }
        return redirect()->route('dashboardmahasiswa');
//        $user->roles()->attach($roles);
//        $validateData = validator($request->all(), [
//            'txtName' => 'required|string|max:100'
//        ])->validate();
//        $genre = new Genre();
//        $genre->name = $validateData['txtName'];
//        $genre->save();
//        return redirect(route('genreList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MkTawar  $mkTawar
     * @return \Illuminate\Http\Response
     */
    public function show(MkTawar $mkTawar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MkTawar  $mkTawar
     * @return \Illuminate\Http\Response
     */
    public function edit(MkTawar $mkTawar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MkTawar  $mkTawar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MkTawar $mkTawar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MkTawar  $mkTawar
     * @return \Illuminate\Http\Response
     */
    public function destroy(MkTawar $mkTawar)
    {
        //
    }
}
