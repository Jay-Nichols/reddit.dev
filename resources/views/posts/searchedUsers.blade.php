@extends('layouts.master')

@section('content')

@foreach ($users as $user)
	<h1>{{ $user->name }}</h1>
	<p>{{ $user->email }}</p>
	<h2>Posts</h2>
	@foreach ($user->posts as $post)
	<p>{{ $post->title }}</p>
	<p>{{ $post->url }}</p>
	<p>{{ $post->content }}</p>
	@endforeach
@endforeach




@stop