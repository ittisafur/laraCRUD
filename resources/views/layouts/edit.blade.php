@extends('master')

@section('content')

	<div class="col-sm-8 blog-main">
		<h1>Create a Post</h1>
		<hr>
		<form action="/posts/edit/{{$post->id}}" method="POST">
			{{csrf_field()}}
			{{method_field('patch')}}
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
		  </div>
		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Update Article</button>
		</form>
	</div>

@stop