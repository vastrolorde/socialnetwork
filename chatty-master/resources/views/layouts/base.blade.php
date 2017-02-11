<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') Social Network</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	@include('partials.nav')
	<div class="container">
		@include('partials.alert')
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	@stack('scripts')
</body>
</html>