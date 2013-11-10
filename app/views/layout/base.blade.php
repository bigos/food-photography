<!doctype html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title></title>

	  @section('head')
	  <link rel="stylesheet" href="/stylesheets/style.css">
	  <script src="/javascripts/modernizr-full.js"></script>
	  @show
</head>
<body>
	  @include('layout.navbar')

	  @yield('body')

	  <script>
	  Modernizr.load([
		  {
			load: '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js',
			complete: function () {
				  if ( !window.jQuery ) {
					  Modernizr.load('js/libs/jquery-1.7.1.min.js');
				  }
			  }
		  },
		  {
			  // This will wait for the fallback to load and
			  // execute if it needs to.
			load: 'needs-jQuery.js'
		  }
	  ]);
      </script>
</body>
</html>
