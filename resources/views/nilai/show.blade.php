@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Detail nilai</div>
			</div>
			<div class="panel-body">
				<div>Id Nilai &nbsp;&nbsp;&nbsp; &nbsp; : {{ $nilai->id_nilai }}</div>
				<div>Id Matkul &nbsp; : {{ $nilai->id_matkul }}</div>
				<div>NIM &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: {{ $nilai->nim }}</div>
				<div>Nama &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;: {{ $nilai->mahasiswa->nama }}</div>
				<div>Nilai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;: {{ $nilai->Nilai }}</div>
			</div>
		</div>
	</div>

@endsection