@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Edit Blog</div>
		</div>
		<div class="panel-body">
			<form class="form" method="POST" action="{{ route('aslab.update', $article->id) }}">
				{{ csrt_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $article->title }}">
				</div>
				
				<div class="form-control">
					<textarea class="form-control" placeholder="Content" name="content">
						{{ $article->content}}
					</textarea>
				</div>
				
				<div class="form-group">
					<select class="form-control" name="category_id">
						@foreach($categories as $key => $category)
							<option value="{{$category->id}}">{{ $category->name}}</option>
						@enddoreach
					</select>
				</div>
			
				<input type="hidden" name="user_id" value="{{auth()->name}}">
				
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
