{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="">

    <!-- Scripts -->
    @vite(['resources/js/app.js','resources/css/Normalize.css','resources/css/header.css'])

</head>
<body>
    <header class="header-container">
        <!-- logo -->
        <h1 class="logo"><a href="{{ url('/') }}">MyStudyMate!!</a></h1>
        <!-- nav bar -->
        <div class="nav-bar">
            <ul class="nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Emplois du temps</a></li>
                <li><a href="#">Our Service</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <!-- sing in and sing up -->
            <ul class="sign">
                @guest
                            {{-- @if (Route::has('login')) --}}
                            @if (Route::has('/'))
                            <li><a href="{{ route('login') }}">Sign in</a></li>
                            @endif

                            {{-- @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Sign up</a></li>
                            @endif --}}

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
        <!-- menu burger for small screen -->
        <div class="menuConatiner">

            <div class="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        // Select elements
        const menuIcon = document.querySelector(".menuConatiner");
        const navBar = document.querySelector(".nav-bar");
        const span1 = document.querySelector(".menu span:first-child");
        const span2 = document.querySelector(".menu span:nth-child(2)");
        const span3 = document.querySelector(".menu span:last-child");
        const sign = document.querySelector('.sign');
        const header = document.querySelector('.header-container');



        // Add click event listener to the menu icon
        menuIcon.addEventListener("click", (event)=> {
            // Toggle the visibility of the navigation bar
                navBar.classList.toggle('active');
                span1.classList.toggle('firstmenu');
                span3.classList.toggle('lastmenu');
                span2.classList.toggle('span2');
        });


        });
    </script>

        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>
