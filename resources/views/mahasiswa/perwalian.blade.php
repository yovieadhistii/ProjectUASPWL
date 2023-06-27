@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Perwalian</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Perwalian</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        {{$tahun}}
		{{-- main content here --}}
        <form method="POST" action="{{ route('checkoutDKBS') }}" onsubmit="doValidate">
            @csrf
        @if(($status[0]->mk_tawar->where('tahun_akademik_id',$tahun))=='[]')
        <div class="accordion" id="accordionExample">
        {{-- @foreach($semesters as $semester=>$mk)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Semester {{$semester}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                        <div class="accordion-body">
                            <div class="accordion" id="s{{$semester}}">
                                @foreach($matkuls as $matkul=>$jadwals)
                                    @if(($jadwals[0]->mata_kuliah->semester)==$semester)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$jadwals[0]->id}}" aria-expanded="true" aria-controls="{{$jadwals[0]->id}}">
                                                    {{$matkul}} {{$jadwals[0]->mata_kuliah->nama}}
                                                </button>
                                            </h2>
                                            <div id="{{$jadwals[0]->id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                                                <div class="accordion-body">
                                                    @foreach(($jadwals->groupBy('kelas')) as $kelas=>$jadwal)
                                                            <p>Kelas {{$kelas}}</p>
                                                        <p class="text-danger">Tersedia : {{($jadwal[0]->max_peserta) - count($jadwal[0]->user)}}</p>
                                                        <div class="form-check">
                                                            <input class="{{$matkul}} form-check-input" type="checkbox" value="{{$kelas}}"  name="{{$matkul}}" data-sks="{{$jadwal[0]->mata_kuliah->sks}}" onclick="pilih(this);">
                                                            <table class="table">
                                                                <tr>
                                                                    <th scope="col">Tipe</th>
                                                                    <th scope="col">Jadwal</th>
                                                                    <th scope="col">Ruangan</th>
                                                                </tr>
                                                            @foreach($jadwal as $detail)
                                                                <tr>
                                                                    <td>{{$detail->tipe}}</td>
                                                                    <td>{{$detail->jadwal}}</td>
                                                                    <td>{{$detail->ruangan}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </table>

                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>

        @endforeach --}}
        @foreach($semesters as $semester => $mk)
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $semester }}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $semester }}" aria-expanded="false" aria-controls="collapse{{ $semester }}">
                Semester {{ $semester }}
            </button>
        </h2>
        <div id="collapse{{ $semester }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $semester }}">
            <div class="accordion-body">
                <div class="accordion" id="s{{ $semester }}">
                    @foreach($matkuls as $matkul => $jadwals)
                        @if(($jadwals[0]->mata_kuliah->semester) == $semester)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $jadwals[0]->id }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $jadwals[0]->id }}" aria-expanded="false" aria-controls="{{ $jadwals[0]->id }}">
                                        {{ $matkul }} {{ $jadwals[0]->mata_kuliah->nama }}
                                    </button>
                                </h2>
                                <div id="{{ $jadwals[0]->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $jadwals[0]->id }}">
                                    <div class="accordion-body">
                                        @foreach(($jadwals->groupBy('kelas')) as $kelas => $jadwal)
                                            <p>Kelas {{ $kelas }}</p>
                                            <p class="text-danger">Tersedia: {{ ($jadwal[0]->max_peserta) - count($jadwal[0]->user) }}</p>
                                            <div class="form-check">
                                                <input class="{{ $matkul }} form-check-input" type="checkbox" value="{{ $kelas }}"  name="{{ $matkul }}" data-sks="{{ $jadwal[0]->mata_kuliah->sks }}" onclick="pilih(this);">
                                                <table class="table">
                                                    <tr>
                                                        <th scope="col">Tipe</th>
                                                        <th scope="col">Jadwal</th>
                                                        <th scope="col">Ruangan</th>
                                                    </tr>
                                                    @foreach($jadwal as $detail)
                                                        <tr>
                                                            <td>{{ $detail->tipe }}</td>
                                                            <td>{{ $detail->jadwal }}</td>
                                                            <td>{{ $detail->ruangan }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endforeach

	    </div>
    
                <button type="submit" class="btn btn-primary my-3">Submit</button>
        @else
            <h1>Anda Sudah Melakukan Perwalian</h1>
        @endif

        </form>
            <!-- /.container-fluid -->
    </div>
</div>
<!-- /.content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(".cb").change(function() {
        //
        //     $(".cb").prop('checked', false);
        //     // if($(this).prop('checked')==false){
        //     //     $(this).prop('checked', true);
        //     // }
        // });
        let sks=0;
        function pilih(kelas) {
            if($(kelas).prop('checked')==false){
                // alert("aa")
                $(kelas).prop('checked', false);
                sks-=parseInt($(kelas).data('sks'))
            }
            else{
                // alert("bb")
                $name=$(kelas).attr("name")
                $('.'+$name).prop('checked', false);
                $(kelas).prop('checked', true);
                sks+=parseInt($(kelas).data('sks'))

            }


        };
        function doValidate(event) {
            if(sks>24){
                event.preventDefault();
            }

            // validate your inputs
        };


    </script>
@endsection
