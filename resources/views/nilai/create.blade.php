@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Create Blog</div>
		</div>
		<div class="panel-body">
			<form class="form" method="get" action="{{ route('nilais.store') }}">
				{{ csrf_field() }}

				<div class="form-group">
					<input type="text" name="id_nilai" class="form-control" placeholder="id_nilai">
				</div>
				<div class="form-group">
					<input type="text" name="id_matkul" class="form-control" placeholder="id_matkul">
				</div>
				<div class="form-group">
					<input type="text" name="nim" class="form-control" placeholder="nim">
				</div>
				<div class="form-group">
					<input type="text" name="nilai" class="form-control" placeholder="nilai">
				</div>
				<div class="form-group">
					<input type="text" name="nama" class="form-control" placeholder="nama">
				</div>
			</form>	
		</div>
	</div>
</div>	

@endsection