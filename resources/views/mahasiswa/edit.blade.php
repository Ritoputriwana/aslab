@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Edit Data Mahasiswa</div>
		</div>
		<div class="panel-body">
			<form class="form" method="POST" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<!-- <div class="form-group">
					<input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $mahasiswa->nim }}">
				</div> -->
				<div class="form-group">
					<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}">
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $mahasiswa->email }}">
				</div>
				<div class="form-group">
					<input type="text" name="semester" class="form-control" placeholder="Semester" value="{{ $mahasiswa->semester }}">
				</div>
				<div class="form-group">
					<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $mahasiswa->alamat }}">
				</div>
				<div class="form-group">
					<input type="text" name="no_hp" class="form-control" placeholder="No HP" value="{{ $mahasiswa->no_hp }}">
				</div>
				<input type="hidden" name="nim" value="{{ auth()->user()->nim }}">
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</div>	

@endsection