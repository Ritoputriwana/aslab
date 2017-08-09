@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Create Blog</div>
		</div>
		
		<div class="panel-body">
			<form class="form" method="get" action="{{ route('aslab..store') }}"> 
				{{ csrf_field() }}
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Title">
				</div>
				
				<div class="form-group">
					<textarea class="form-control" placeholder="Content" name="content"></textarea>
				</div>
				
				<div class="form-control">
					<select class = "form-control" name="Category_id">
						@foreach($Categories as $key => $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<input type="hidden" name="user_id" value=""{{ auth() ->user()->id }}>
				
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>