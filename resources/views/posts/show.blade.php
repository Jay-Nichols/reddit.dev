@extends('layouts.master')

@section('content')

<h1>Post: {{ $post->title }}</h1>
<h3>Content: {{ $post->content }}</h3>
<p>URL: {{ $post->url }}</p>


<!-- <table class="table table-inverse">
	<thead>
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
	
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
		</tr>
	<tbody>
</table> -->

@stop