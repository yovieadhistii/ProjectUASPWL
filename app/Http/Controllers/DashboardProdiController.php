<?php

namespace App\Http\Controllers;
use App\Prodi;
use Illuminate\Http\Request;

class DashboardProdiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Prodi::all();
        return view('prodi.index',[
            'prodis'=> $data
        ]);
        // return view('/Prodi/dashboardProdi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Prodi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(),[
            'kdProdi' => 'required|string|max:100',
            'txtName' => 'required|string|max:100',
            'txtWebsite' => 'required|string|max:100'
        ])->validate();
        $prodi = new Prodi();
        $prodi -> kode_prodi = $validatedData['kdProdi'];
        $prodi -> nama = $validatedData['txtName'];
        $prodi -> website = $validatedData['txtWebsite'];
        $prodi -> users_id = "2";
        $prodi -> save(); 
        return  redirect(route('dashboardProdi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prodi $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
