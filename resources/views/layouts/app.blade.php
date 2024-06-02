<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  <link rel="stylesheet" href="{{asset("assets/css/open-iconic-bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/aos.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/ionicons.min.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/bootstrap-datepicker.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/jquery.timepicker.css")}}">


  <link rel="stylesheet" href="{{asset("assets/css/flaticon.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/icomoon.css")}}">
  <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    {{ config('app.name', 'Laravel') }}
  </title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div id="app">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>

            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span></a>
            <li class="nav-item"><a href="login.html" class="nav-link">login</a></li>
            <li class="nav-item"><a href="register.html" class="nav-link">register</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <script src="{{asset("assets/js/jquery.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("assets/js/popper.min.js")}}"></script>
  <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery.easing.1.3.js")}}"></script>
  <script src="{{asset("assets/js/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("assets/js/aos.js")}}"></script>
  <script src="{{asset("assets/js/jquery.animateNumber.min.js")}}"></script>
  <script src="{{asset("assets/js/bootstrap-datepicker.js")}}"></script>
  <script src="{{asset("assets/js/jquery.timepicker.min.js")}}"></script>
  <script src="{{asset("assets/js/scrollax.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset("assets/js/google-map.js")}}"></script>
  <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>