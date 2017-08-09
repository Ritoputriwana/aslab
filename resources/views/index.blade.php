@extends('layputs.app')

@section ('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-title">List Articles</div>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>Date</th>
					<th colspan="3">Action</th>
				</tr>
				@foreach($articles as $key => $article)
				<tr>
					<td>{{ $article->id}}</td>
					<td>{{ $article->title}}</td>
					<td>{{ $article->user->name}}</td>
					<td>{{ $article->category->name}}</td>
					<td>{{ $article->created_at->toFormattedDateString()}}</td>
					<td><a href="{{route('aslab.show', $article->id)}}" class="btn btn-primary">Show</a></td>
					<td><a href="{{route('aslab.edit', $article->id)}}" class="btn btn-warning">Edit</a></td>
					<td>
						<form method="POST" action="{{route('aslab.delete', $article->id)}}">
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