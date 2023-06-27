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
		{{-- main content here --}}
        <form method="POST" action="{{ route('tambahDKBS') }}>
            @csrf
        <table class="table table-striped table-hover">
        <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">Kelas</th>
            <th scope="col">Semester</th>
            <th scope="col">Tipe</th>
            <th scope="col">Jadwal</th>
        </tr>
        @foreach($perwalian as $matkul)
            @foreach($matkul as $detail)
                <tr>
                    <td>{{$detail->mata_kuliah_kode}}</td>
                    <td>{{$detail->mata_kuliah->nama}}</td>
                    <td>{{$detail->kelas}}</td>
                    <td>{{$detail->mata_kuliah->semester}}</td>
                    <td>{{$detail->tipe}}</td>
                    <td>{{$detail->jadwal}}</td>
                </tr>
                <input type = "hidden" name ="topic" value = "{{$detail->id}}" />
                @endforeach
                @endforeach
                </table>
                <button type="submit" class="btn btn-primary my-3">Submit</button>

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
