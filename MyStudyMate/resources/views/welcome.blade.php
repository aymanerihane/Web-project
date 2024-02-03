
@vite(['resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css","resources/css/welcome.css"])
<style>
    .landing{
        min-height:100vh;
        background-color: #1f2021;
        background-image: url('{{ asset("storage/images/study.jpg") }}');
        background-size: cover;
        position: relative;
        }
</style>
<?php
    if($_SERVER["PHP_SELF"] == "/index.php"){
?>
<header class="header-container">
<?php }else{?>
    <header style="height: 80px" class="header-container">
<?php }?>
    <!-- logo -->
    <h1 class="logo"><a href="{{ url('/') }}">MyStudyMate!!</a></h1>
    <!-- nav bar -->
    <div class="nav-bar">
        <?php
        if($_SERVER["PHP_SELF"] == "/index.php"){
            ?>
        <ul class="nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="/emploisTemps">Emplois du temps</a></li>
            <li><a href="/motDoy">Mot du Doyen</a></li>
            <li><a href="/contact">Contact us</a></li>
        </ul>
        <?php }
        ?>
        <!-- sing in and sing up -->
        <ul class="sign">
            @guest

                        <?php
                        if($_SERVER["PHP_SELF"] == "/index.php"){
                            ?>
                        <li><a href="{{ route('login') }}">Sign in</a></li>


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

                            @endif
                        </div>
                    @endguest
        </ul>
    </div>
    <?php
    if($_SERVER["PHP_SELF"] == "/index.php"){?>
    <!-- menu burger for small screen -->
    <div class="menuConatiner">

        <div class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <?php } ?>
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


<div class="landing">
<div class="overlay"></div>
<div class="text">
    <div class="content">
        <h2>
            Bienvenue sur MyStudyMate
        </h2>
        <p>Votre Porte d'Entrée vers l'Excellence Académique !</p>
    </div>
</div>
</div>
<!-- end landing -->
<!-- formation section starts  -->

<section id="course">

<h1 class="heading">Formation Initial</h1>

<div class="box-container">

    @php
$formations = app('App\Http\Controllers\formation')->showFormation();
@endphp
@foreach ($formations as $formation)
<a href="{{url('filiereWelc')}}?idFormation={{$formation->id_formation}}">
    <div class="box" data-aos="flip-right">
    <img style="margin-bottom: 60px;" src="{{ asset('storage/images/deust.jpeg') }}" alt="">
    <p>{{ $formation->nomformation }}</p>
    </div>
</a>
@endforeach
{{-- <div id="choix1 filchoix" class="e-card playing cardW " > --}}


</div>

<h1 class="heading">Annonce list</h1>

<div class="listAnnonce" style="display: flex;align-items:center;justify-content:center;flex-wrap: wrap;">
    @php
        $annonces = app('App\Http\Controllers\Annonces')->showAllAnn();
    @endphp

    @if(is_countable($annonces) && count($annonces) > 0)
        @foreach ($annonces as $annonce)
            <div class="annonce-card" style="display: flex;flex-direction: column;align-items:center;justify-content:center;">
                <div class="imgholder">
                    {{-- You can add an image here if needed --}}
                </div>
                <h1 class="head-card">{{ app('App\Http\Controllers\filieres')->findfil($annonce->id_filiere)->nom }}</h1>
                <div class="containerAnnonceText" style="width: 100%;">
                    <h1 class="head-card">{{ $annonce->titre }}</h1>
                    <p class="text-card" style="width: 100%;padding: 5px">{{ $annonce->resume }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No announcements available.</p>
    @endif
</div>
<script src="https://kit.fontawesome.com/e9d0d16c17.js" crossorigin="anonymous"></script>
</section>

<!-- formation section ends -->

<!-- service section starts  -->
<!--
<section id="service">

<h1 class="heading">Service</h1>

<div class="box-container">

<div class="box" data-aos="flip-up">
<img src="images/service1.svg" alt="">
<div class="info">
  <h2>skilled teachers</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
</div>
</div>

<div class="box" data-aos="flip-down">
<img src="images/service2.svg" alt="">
<div class="info">
  <h2>24x7 hours service</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
</div>
</div>

<div class="box" data-aos="flip-up">
<img src="images/service3.svg" alt="">
<div class="info">
  <h2>certificate distribution</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
</div>
</div>

</div>

</section>
-->
<!-- service section ends -->
{{--  --}}
<!-- footer -->
<div class="footer">
<div class="container">
    <i class="fa fa-graduation-cap" aria-hidden="true"> <h2>MystudyMate</h2></i>
    <p>Contactez Nous</p>
    <div class="social-icons">
        <a target="_blank"  href="https://web.facebook.com/fstt.ac.ma" style="color:#fff"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank"  href="https://www.instagram.com/fsttanger/" style="color:#fff"><i class="fab fa-instagram"></i></a>
        <a target="_blank"  href="https://www.linkedin.com/school/fsttanger/"><i class="fab fa-linkedin" style="color:#fff"></i></a>
        <a target="_blank"  href="https://twitter.com/fsttofficielle" style="color:#fff"><i class="fab fa-twitter"></i></a>



    </div>
</div>
</div>
