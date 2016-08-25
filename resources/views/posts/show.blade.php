@extends('layouts.master')

@section('content')

<h1>{{ $post->title }}</h1>
<h3>{{ $post->content }}</h3>
<p>{{ $post->url }}</p>


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