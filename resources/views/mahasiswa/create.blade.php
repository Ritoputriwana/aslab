@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Masukkan Data Diri</div>
		</div>
		
		<div class="panel-body">
			<form class="form" method="get" action="{{ route('mahasiswa.store') }}"> 
				{{ csrf_field() }}

				<div class="form-group">
					<input type="text" name="nim" class="form-control" placeholder="nim">
				</div>
				
				<div class="form-group">
					<input type="text" name="nama" class="form-control" placeholder="nama">
				</div>
				
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="email">
				</div>

				<div class="form-group">
					<input type="text" name="semester" class="form-control" placeholder="Semester">
				</div>

				<div class="form-group">
					<textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
				</div>
				
				<div class="form-group">
					<input type="text" name="no_hp" class="form-control" placeholder="noHP">
				</div>

				<input type="hidden" name="user_id" value=""{{ auth() ->user()->id }}>
				
				<br>
				<div class="form-group">
					<button class="btn btn-primary btn-block">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection