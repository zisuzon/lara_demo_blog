<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link href="/css/style.css" rel="stylesheet">	
  </head>

  <body>

    <header>
	   @include('partials.navbar')		
    </header>
	
    @yield('content')
    
    <footer>
	   @include('partials.footer')	
	</footer>
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
	<script src="/js/responsive-slider.js"></script>
	<script src="/js/wow.min.js"></script>
	<script>wow = new WOW({}).init();</script>
    
</body>
</html>