@extends('layouts.master')

@section('content')

<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title</label>	
		<input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?: $post->title }}">
	</div>
	<div class="form-group">
		<label for="url">URL</label>
		<input type="text" class="form-control" id="url" name="url" value="{{ old('url') ?: $post->url }}">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<input type="text" class="form-control" id="content" name="content" value="{{ old('content') ?: $post->content }}">
	</div>
<button type="submit">Submit</button>
</form>

<!-- <form method="POST" action="{{ action('PostsController@store') }}">
{!! csrf_field() !!}
Title: <input type="text" name="title" value="{{ old('title') }}">
Content: <input type="text" name="content" value="{{ old('content') }}">
URL: <input type="text" name="url" value="{{ old('url') }}">
<input type="submit">
</form> -->

@stop