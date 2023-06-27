<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\MataKuliah;
use App\MkTawar;
use Illuminate\Http\Request;
use App\ProgramStudi;
Use App\User;
Use App\TahunAkademik;
class MataKuliahTawarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $programStudiKode = $user->program_studi_kode_prodi;
        $namaProgramStudi = ProgramStudi::where('kode_prodi', $programStudiKode)->value('nama'); 
        $tahunAkademik = TahunAkademik::where('status', 'aktif')->first();
        $datamktawar = MkTawar::all();
        $statusa = $tahunAkademik ? $tahunAkademik->id : "";
        $extractedValue = MkTawar::join('mata_kuliah', 'mata_kuliah.id', '=', 'mk_tawar.mata_kuliah_kode')
        ->select("*")
        ->where('program_studi_kode_prodi', $programStudiKode)
        ->get();

         return view('mktawar.dashboard',[
             'mktawars'=> $extractedValue,
             'namaProgramStudia' => $namaProgramStudi,
             'programStudiKode' => $programStudiKode,
             'status' => $statusa
        ]);
        // dd($statusa,$datamktawar, $namaProgramStudi,$extractedValue);
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
        $kodeMataKuliah = MataKuliah::where('program_studi_kode_prodi', $program_studi_kode_prodi)->pluck('id','nama');
         return view('mktawar.create', [
             'kodeMataKuliaha' => $program_studi_kode_prodi,
             'kodeMataKuliahs' => $kodeMataKuliah,
         ]);
        // dd($program_studi_kode_prodi,$kodeMataKuliah);
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
            'idMK' => 'required|string|max:100',
            'kelas' => 'required|string|max:100',
            'tahunAkademik' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'ruangan' => 'required|string|max:100',
            'maksPeserta' => 'required|string|max:100',
            'tipeMK' => 'required|string|max:100',
        ])->validate();
        $mkTawar = new MkTawar();
        $mkTawar -> mata_kuliah_kode = $validatedData['idMK'];
        $mkTawar -> kelas = $validatedData['kelas'];
        $mkTawar -> tahun_akademik_id = $validatedData['tahunAkademik'];
        $mkTawar -> jadwal = $validatedData['jadwal'];
        $mkTawar -> ruangan = $validatedData['ruangan'];
        $mkTawar -> max_peserta = $validatedData['maksPeserta'];
        $mkTawar -> tipe = $validatedData['tipeMK'];
        $mkTawar -> save(); 
        return redirect(route('lihatMKTawar',['id'=>$program_studi_kode_prodi]));
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
    public function destroy($matkulkode,$kelasmatkul,$tipematkul)
    {
        $mataKuliahTawar = MkTawar::where('mata_kuliah_kode', $matkulkode)->where('kelas', $kelasmatkul)->where('tipe', $tipematkul)->get();
    
        $mataKuliahTawar->each(function ($item) {
            $item->delete();
        });
        
        //dd($matkulkode,$kelasmatkul,$tipematkul,$mataKuliahTawar);
        return redirect()->route('lihatMKTawar');
    }
    public function updateStatus(Request $request)
    {
        $status = $request->input('status');

        TahunAkademik::where('status', 'aktif')->update(['status' => '']);
        TahunAkademik::where('id', $status)->update(['status' => 'aktif']);
        return redirect()->route('lihatMKTawar');
    }
}
