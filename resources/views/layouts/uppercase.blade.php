@extends('layouts.master')

@section('content')
<h1>{{ $word }}</h1>
<!-- <h1>{{$upperCase}}</h1> -->

<p>
	<a href="{{ action('HomeController@increment', ['number' => 10]) }}">Increase Number</a>
</p>	
@stop