<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Apollon') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--  Fontawesome  -->
    <script src="https://kit.fontawesome.com/d93c46c83b.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <style>
        :root {
            --laravel-red: #F05340;
            --primary-blue: #195199;
            --primary-red: #D4003D;
            --footer: #1F1F1F;
        }

        .bg-cus {
            background-color: var(--primary-blue);
        }

        #app {
            position: relative;
            min-height: 70vh;
        }

        .logo-name{
            font-size:18px;
        }

        .nav-item{
            font-size:16px;
        }

        /* bottom-line is the bottom border that is visible when you hover on an nav-item */
        .bottom-line {
            border: none;
            position: relative;
        }

        .bottom-line::after {
            content: '';
            position: absolute;
            /* Change this to absolute/relative depending on nav-link:hover style */
            width: 0px;
            height: 2px;
            left:50%;
            bottom: 0;
            background-color: white;  /* color of the bottom-border */
            transition: all ease-in-out .3s;
            margin-bottom: 3px;
        }

        .bottom-line:hover::after {
            width: 99%;
            left: 0;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
        }
    </style>

    <div id="app">
        <nav class="pt-4 pb-4 navbar navbar-expand-md navbar-dark bg-cus shadow-lg">
            <div class="container">
                <!--<img style="border-radius:100px; background-color:white;height:100px; width:100px;" src="images/logo_transparent.png" alt="">-->
                <a class="navbar-brand logo-name" href="{{ url('/') }}">
                    La Cozza Infuriata
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item bottom-line {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home<a>
                        </li>
                        <li class="nav-item bottom-line {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item bottom-line {{ Request::is('careers') ? 'active' : '' }}">
                            <a class="nav-link" href="/careers">Careers</a>
                        </li>
                        <li class="nav-item dropdown bottom-line">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact Us
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/feedback">Feedback</a>
                                <a class="dropdown-item" href="/report">Report a problem</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto nav-item">
                        <a href="{{route('show')}}" class="nav-link">

                            <!-- My cart page -->
                            My Cart
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-pill badge-danger" style="font-size:12px;">
                                {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}
                            </span>

                        </a>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                            <a class="nav-link text-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="text-center ml-4" style="width:60px; height:60px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                        style="border-radius:50%;width:60px; height:60px;">
                                </div>
                                <a class="dropdown-item" href="/my-profile">
                                    My Profile
                                </a>
                                <a class="dropdown-item" href="/history">
                                    Order history
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>


        @include('layouts.footer')
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f8745462901b92076937929/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>