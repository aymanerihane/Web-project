
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
    @vite(['resources/js/app.js','resources/js/admin_ajax.js','resources/js/loader.js','resources/css/Normalize.css','resources/css/header.css','resources/css/sign.css',"resources/css/admin.css","resources/css/loader.css"])

</head>
<body>
    {{-- <div class="loader">
        <svg xmlns="http://www.w3.org/2000/svg" height="200px" width="200px" viewBox="0 0 200 200" class="pencil">
            <defs>
                <clipPath id="pencil-eraser">
                    <rect height="30" width="30" ry="5" rx="5"></rect>
                </clipPath>
            </defs>
            <circle transform="rotate(-113,100,100)" stroke-linecap="round" stroke-dashoffset="439.82" stroke-dasharray="439.82 439.82" stroke-width="2" stroke="#fff" fill="none" r="70" class="pencil__stroke"></circle>
            <g transform="translate(100,100)" class="pencil__rotate">
                <g fill="none">
                    <circle transform="rotate(-90)" stroke-dashoffset="402" stroke-dasharray="402.12 402.12" stroke-width="30" stroke="hsl(37, 25%, 50%)" r="64" class="pencil__body1"></circle>
                    <circle transform="rotate(-90)" stroke-dashoffset="465" stroke-dasharray="464.96 464.96" stroke-width="10" stroke="hsl(37, 25%, 60%)" r="74" class="pencil__body2"></circle>
                    <circle transform="rotate(-90)" stroke-dashoffset="339" stroke-dasharray="339.29 339.29" stroke-width="10" stroke="hsl(37, 25%, 40%)" r="54" class="pencil__body3"></circle>
                </g>
                <g transform="rotate(-90) translate(49,0)" class="pencil__eraser">
                    <g class="pencil__eraser-skew">
                        <rect height="30" width="30" ry="5" rx="5" fill="hsl(37, 25%, 70%)"></rect>
                        <rect clip-path="url(#pencil-eraser)" height="30" width="5" fill="hsl(37, 25%, 60%)"></rect>
                        <rect height="20" width="30" fill="hsl(37, 25%,90%)"></rect>
                        <rect height="20" width="15" fill="hsl(37, 25%,70%)"></rect>
                        <rect height="20" width="5" fill="hsl(37, 25%,80%)"></rect>
                        <rect height="2" width="30" y="6" fill="hsla(37, 25%,10%,0.2)"></rect>
                        <rect height="2" width="30" y="13" fill="hsla(37, 25%,10%,0.2)"></rect>
                    </g>
                </g>
                <g transform="rotate(-90) translate(49,-30)" class="pencil__point">
                    <polygon points="15 0,30 30,0 30" fill="hsl(33,90%,70%)"></polygon>
                    <polygon points="15 0,6 30,0 30" fill="hsl(33,90%,50%)"></polygon>
                    <polygon points="15 0,20 10,10 10" fill="hsl(37, 25%,100%)"></polygon>
                </g>
            </g>
        </svg>
    </div> --}}

    <header class="header-container">
        <!-- logo -->
        <h1 class="logo"><a href="{{ url('/') }}">MyStudyMate!!</a></h1>
        <!-- nav bar -->
        <div class="nav-bar">
            <?php
            if($_SERVER["PHP_SELF"] == "/index.php"){
                ?>
            <ul class="nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Emplois du temps</a></li>
                <li><a href="#">Our Service</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <?php }
            ?>
            <!-- sing in and sing up -->
            <ul class="sign">
                @guest

                            {{-- @if (Route::has('login')) --}}

                            <?php
                            if($_SERVER["PHP_SELF"] == "/index.php"){
                                ?>
                            <li><a href="{{ route('login') }}">Sign in</a></li>


                            <li><a href="{{ route('register') }}">Sign up</a></li>
                            <?php }
                            ?>

                            @else
                            <div class="log">
                                @if($_SERVER["PHP_SELF"] == "/index.php")
                                    @auth
                                        <p class="name"> {{ Auth::user()->name }} </p>
                                        <li class="btnlog">

                                            <div class="lougout">
                                                <a class="loga" href="{{ route('auth.home') }}">
                                                    DashBord
                                                </a>
                                            </div>
                                        </li>
                                    @endauth
                                @else
                                {{-- <p class="name"> {{ Auth::user()->name }} </p>
                                    <li class="btnlog">

                                        <div class="lougout">
                                            <a class="loga" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li> --}}
                                @endif
                            </div>
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
