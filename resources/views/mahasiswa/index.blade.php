@extends('layouts.app')

@section ('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-title">List mahasiswa</div>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Semester</th>
					<th>Alamat</th>
					<th>No HP</th>
					<th colspan="3">Action</th>
				</tr>
				@foreach($mahasiswa as $key => $mahasiswa)
				<tr>
					<td>{{ $mahasiswa->nim}}</td>
					<td>{{ $mahasiswa->nama}}</td>
					<td>{{ $mahasiswa->email}}</td>
					<td>{{ $mahasiswa->semester}}</td>
					<td>{{ $mahasiswa->alamat}}</td>
					<td>{{ $mahasiswa->no_hp}}</td>
					<td><a href="{{route('mahasiswa.show', $mahasiswa->nim)}}" class="btn btn-primary">Show</a></td>
					<td><a href="{{route('mahasiswa.edit', $mahasiswa->nim)}}" class="btn btn-warning">Edit</a></td>
					<td>
						<form method="POST" action="{{route('mahasiswa.delete', $mahasiswa->nim)}}">
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

@endsection