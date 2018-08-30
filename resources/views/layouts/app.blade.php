<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Always force latest IE rendering engine -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="portfolio, personal, corporate, business, parallax, creative, agency">

  <!-- Meta for Description -->
  <meta property="og:title" content="Molecule">
  <meta property="og:description" content="Molecule​ is an Innovative Software that provides a means for Developers to
  Connect Seamlessly with qualified tested Developers and task them with projects
  that they are too busy to do.">
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <!-- Theme Color -->
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#01e9de">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#01e9de">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#01e9de">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/molecule-nav.png')}}">

	<!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,500" rel="stylesheet">

	<!--[if lt IE 9]-->
	<script src="{{ asset('js/html5shiv.min.js')}}"></script>
    <!--[endif]-->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app-custom.js') }}" defer></script>
<!--====== js ======-->


	<!-- jQuery -->
	<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="http://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

	<!-- bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>

	<!-- singlePageNav -->
	<script src="{{ asset('js/jquery.singlePageNav.min.js')}}"></script>

	<!-- owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>

	<!-- stellar js -->
	<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>

	<!-- jquery.magnific-popup.min js -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>

	<!-- typed js -->
	<script src="{{ asset('js/typed.js')}}"></script>

	<!-- isotope.pkgd.min js -->
	<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>

	<!-- particles.min js -->
	<script src="{{ asset('js/particles.min.js')}}"></script>

	<!-- validator js -->
	<script src="{{ asset('js/validator.js')}}"></script>

	<!-- custom js -->
	<script src="{{ asset('js/custom.js')}}"> </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('stylesheet')


    <!-- Theme Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#01e9de">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#01e9de">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#01e9de">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Molecule') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
