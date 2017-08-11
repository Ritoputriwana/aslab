@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">List nilai</div>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<!-- <th>#</th> -->
						<th>id_nilai</th>
						<th>id_matkul</th>
						<th>nim</th>
						<th>nilai</th>
						<th>nama</th>
						<th colspan="3">Action</th>
					</tr>
					@foreach($nilais as $key => $nilai)
					<tr>
						<td>{{ $nilai->id_nilai }}</td>
						<td>{{ $nilai->id_matkul }}</td>
						<td>{{ $nilai->mahasiswa->nim }}</td>
						<td>{{ $nilai->Nilai }}</td>
						<td>{{ $nilai->mahasiswa->nama }}</td>
						<td>{{ $nilai->created_at }}</td>
						<td><a href="{{ route('nilai.show', $nilai->id_nilai) }}" class="btn btn-primary">Show</a></td>
						<td><a href="{{ route('nilai.edit', $nilai->id_nilai) }}" class="btn btn-warning">Edit</a></td>
						<td>
						<form method="POST" action="{{ route('nilai.delete', $nilai->id_nilai) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-danger">Delete</button>
						</form>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>

@endsection
