@extends('layouts.app')

@section('content')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Detail Article</div>
			</div>
			<div class="panel-body">
				<div>{{ $article->title }}</div>
				<div>{{ $article->content }}</div>
				<div>{{ $article->category->name }}</div>
				<div>{{ $article->created_at->toFormattedDateString() }}</div>
				<div>{{ $article->user->name }}</div>
			</div>
		</div>
	</div>

@endsection