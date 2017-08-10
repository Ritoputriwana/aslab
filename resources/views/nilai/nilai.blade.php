@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Masukkan Nilai</div>
		</div>
		
		<div class="panel-body">
			<form class="form" method="get" action=""> 
				{{ csrf_field() }}
				<div class="form-group">
					<input type="text" name="NIM" class="form-control" placeholder="NIM">
				</div>

				<!-- <div class="form-control"> -->
					<select class = "form-control" name="id_matkul">
						@foreach($matakuliah as $key => $matakuliah_)
							<option value="{{ $matakuliah_->id_matkul }}">{{ $matakuliah_->nama_matkul }}</option>
						@endforeach
					</select>

					<br>
					<div class="form-group">
					<input type="text" name="nilai" class="form-control" placeholder="Nilai">
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