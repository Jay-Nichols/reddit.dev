@extends('layouts.master')

@section('content')

<tbody>
	<tr>
		<td>{{ $post->title }}</td>
		<td>{{ $post->url }}</td>
		<td>{{ $post->content }}</td>
	</tr>
<tbody>

@stop