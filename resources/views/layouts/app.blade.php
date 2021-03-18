<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Book Club
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if (Auth::check())
                        @if( Auth::user()->type == "Administator")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('status') }}">{{ __('Approval Page') }}</a>
                        </li>
                        @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url("/book")}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('status') }}">{{ __('Approval Page') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Type as {{ Auth::user()->type }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>status</b> {{ Auth::user()->status }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('documentation') }}">Document</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
                <form class="form-inline my-2 my-lg-0" method="POST" action='{{url("search")}}'>
                    {{csrf_field()}}
                    <input class="form-control mr-sm-2" type="text" placeholder="search" name="search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit">Search</button>
                </form>
                </li>
                @endguest
                </ul>
            </div>
    </div>
    </nav>


    </div>
    <main class="py-0">
        @yield('content')
    </main>
</body>


<section id="footer">
    <div class="container">
        <header class="row">
            <h2>Gaganpreet Singh</h2><br>
            <p>S2930943</p>
        </header>
</section>

</html>