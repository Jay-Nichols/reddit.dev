@extends('layout.master')

@section('content')

<tbody>
@foreach($posts as $post)
	<tr>
		<td>{{ $post->title }}</td>
		<td>{{ $post->url }}</td>
		<td>{{ $post->content }}</td>
	</tr>
@endforeach
<tbody>

@stop