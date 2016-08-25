@extends('layouts.master')

@section('content')


<h3>Create a Post</h3>

<form method="POST" action="{{ action('PostsController@store') }}">
{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title</label>	
		<input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
	</div>
	<div class="form-group">
		<label for="url">URL</label>
		<input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}">
	</div>
<button type="submit">Submit</button>
</form>

@if ($errors->has('title'))
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
@endif

@if ($errors->has('content'))
	{!! $errors->first('content', '<span class="help-block">:message</span>') !!}
@endif

@if ($errors->has('url'))
	{!! $errors->first('url', '<span class="help-block">:message</span>') !!}
@endif



@stop