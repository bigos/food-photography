<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  @section('head')
  <link rel="stylesheet" href="/stylesheets/style.css">
  <!-- query external stylesheet -->
  <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:480px)" href="/stylesheets/mobile.css" >
  <script src="/javascripts/modernizr-full.js"></script>
  @show
</head>
<body>
  @include('layout.navbar')

  @yield('body')

  @include('layout.modernizr')
</body>
</html>
