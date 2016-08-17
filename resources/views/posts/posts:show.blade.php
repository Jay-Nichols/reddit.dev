@extends('layout.master')

@section('content')

<ul>
<?php foreach ($posts as $post): ?>
	<li><?= $post; ?></li>
<?php endforeach; ?>

</ul>


@stop