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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
  <script src="/javascripts/app.js"></script>
  <script src="/javascripts/modernizr-full.js"></script>
  @show
</head>
<body>
  <header>
    <div id="logo">
      Chris Beard Food Photography
    </div>
    @include('layout.navbar')
  </header>
  <div class="horizontal-bar"></div>

  @yield('body')

  <div class="respdemo">
    <div class="phone">phone</div>
    <div class="tablet">tablet</div>
    <div class="desktop">desktop</div>
  </div>

  <div class="horizontal-bar"></div>
  <footer>
    &copy; Chris Beard 2013
  </footer>

  @include('layout.modernizr')
</body>
</html>
