@extends ('layouts.master')

@section('content')
<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label for "email">Email</label>
		<input
			type="email"
			class="form-control"
			name="email"
			id="email">
		{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group">
		<label for "password">Password</label>
		<input
			type="password"
			class="form-control"
			name="password"
			id="password">
		{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
		<div class="btn-large">
			<button type="submit">Login</button>
		</div>
</form>


@stop