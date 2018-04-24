<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg">
                <header id="header">
                <div class="inner">
                    <a href="" class="logo">HelpShop</a>
                    <a href="{{ url('/view') }}">LETTER</a>
                    <nav id="nav">
                    @if (Route::has('login'))
                    @auth
                        <a class="User_Btn" href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                    @else
                        <a class="User_Btn" href="{{ route('login') }}">Login</a>
                        <a class="User_Btn" href="{{ route('register') }}">Register</a>
                    @endauth
                    @endif
                    </nav>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                    </form>
                </div>
            </header>
            <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            
        <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel load">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/login/StickMan.png') }}" height="42" weight="42"/>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        Authentication Links
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><img src="{{ asset('img/login/Login_Btn.png') }}" height="32" weight="32"/> {{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><img src="{{ asset('img/login/Register_Btn.png') }}" height="30" weight="30"/>{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/add') }}">
                                        add article
                                    </a>
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
        </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('js')
</body>
</html>