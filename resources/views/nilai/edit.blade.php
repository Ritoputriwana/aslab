@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Edit Blog</div>
		</div>
		<div class="panel-body">
			<form class="form" method="POST" action="{{ route('nilai.update', $nilai->id_nilai) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				
				<input type="hidden" name="id_nilai" class="form-control" placeholder="Nim" value="{{ $nilai->id_nilai }}">

				<div class="form-group">
					<input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $nilai->nim }}">
				</div>
				<div class="form-group">
					<select class="form-control" name="category_id">
						@foreach($matakuliah as $key => $category)
						<option value="{{ $category->id_matkul }}">{{ $category->nama_matkul }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="nilai" class="form-control" placeholder="Nilai" value="{{ $nilai->Nilai }}">
				</div>
				<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</div>	

@endsection