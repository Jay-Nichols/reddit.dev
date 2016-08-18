<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
</head>
<body>
    @yield('content')
    @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
	@endif
</body>
</html>
