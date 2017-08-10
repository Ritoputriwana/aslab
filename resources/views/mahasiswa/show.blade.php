@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Data Mahasiswa</div>
			</div>
			<div class="panel-body">
				<div>NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mahasiswa->nim }}</div>
				<div>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mahasiswa->nama }}</div>
				<div>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mahasiswa->email }}</div>
				<div>Semester &nbsp;&nbsp;: {{ $mahasiswa->semester }}</div>
				<div>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mahasiswa->alamat }}</div>
				<div>No Hp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mahasiswa->no_hp }}</div>
			</div>
		</div>
	</div>

@endsection
