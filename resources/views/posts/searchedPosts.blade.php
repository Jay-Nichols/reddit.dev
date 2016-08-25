@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
	<h1>{{ $post->title }}</h1>
	<h3>{{ $post->content }}</h3>
	<p>{{ $post->url }}</p>
@endforeach
@stop