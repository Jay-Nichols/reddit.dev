@extends('layouts.master')

@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <button type="submit">Register</button>
    </div>
</form>


@stop