<!doctype html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
	  <title></title>
	  @section('head')
	  <link rel="stylesheet" href="/stylesheets/style.css" />
	  @show
</head>
<body>
	  @include('layout.navbar')

	  @yield('body')
</body>
</html>
