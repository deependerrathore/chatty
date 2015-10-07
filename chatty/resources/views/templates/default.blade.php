<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Chatty</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
	<body>
		@include('templates.partials.navigation')
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>