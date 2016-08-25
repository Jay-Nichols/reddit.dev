<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reddit</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
	.navbar {
		background-color: #e6f0ff;
		background-image: none;
	}
	.active {
		background-color: #b3d1ff;
		background-image: none;
	}
	</style>
</head> 

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{ action('PostsController@index')}}">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			<li><a href="">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" action="{{ action('PostsController@search') }}">
		  	<input type="radio" value="user" name="type">User
		  	<input type="radio" value="post" name="type">Post
			<div class="form-group">
			  <input type="text" class="form-control" name="keyword" placeholder="Search">
			</div>
			<button class="btn btn-default">Submit</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="{{ action('Auth\AuthController@getLogout') }}">Log Out</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	@if (Auth::check())
	<!-- <a class="btn btn-default" href="{{ action('Auth\AuthController@getLogout') }}" role="button">Logout</a> -->
	
	
	@else 
	
	@endif

	@yield('content')
	@if (session()->has('success'))
	<div class="alert alert-success">{{ session('success') }}</div>
	@endif
</body>
</html>
