@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
<h3>{{ $post->title }}</h3>
@endforeach

{{!! $posts->render() !!}}

@stop