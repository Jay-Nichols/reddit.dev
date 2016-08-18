@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
<h2>{{$post->title }}</h2> <h3>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</h3>
@endforeach

{!! $posts->render() !!}

@stop