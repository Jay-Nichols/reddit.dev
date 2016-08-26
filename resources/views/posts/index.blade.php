@extends('layouts.master')

@section('content')

<h1>Hello,  {{ Auth::user()->name }}</h1>

<table class="table table-inverse">
	<thead>
		<tr>
			<th>Vote</th>
			<th>Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($posts as $post)

		<tr>
			<td><a style="font-size: 1.7em;"class="glyphicon glyphicon-arrow-up" href="{{ action('VotesController@upvote', $post->id)}}"></a><br><p></p><br><a style="font-size:1.7em" class="glyphicon glyphicon-arrow-down" href="{{ action('VotesController@downvote', $post->id) }}"></a></td>
			<td><h3><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h3><p>Submitted {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</p></td></p></td>
			<td><a class="btn btn-warning" href="{{ action('PostsController@edit', $post->id) }}">Edit</a></td>
			<td>
				<form method="post" action="{{ action('PostsController@destroy', $post->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>

			<!-- <td><p>{{ $post->url }}</p></td>
			<td><p>{{ $post->content }}</p></td>
			<td><p>{{ $post->author->name }}</p></td> -->
		</tr>
		
		@endforeach
	</tbody>
</table>

{!! $posts->render() !!}

@if (Auth::check()) 

	<a class="btn btn-default" href="{{ action('PostsController@create') }}" role="button">Create a New Post</a>
   
	<!-- <a href="{{ action('PostsController@create') }}">Create a New Post</a> -->
@else 
   

@endif

@stop