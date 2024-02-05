
@vite(['resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css","resources/css/welcome.css"])
<style>
    .landing{
        min-height:100vh;
        background-color: #1f2021;
        background-image: url('{{ asset("storage/images/study.jpg") }}');
        background-size: cover;
        position: relative;
        }
        html{
            scroll-behavior: smooth;
        }
        .ann{
            width: 100%;
            margin: 10px;
            height: 200px;
            border-radius: 20px;
            box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
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
            <li><a href="#course">Formations Initial</a></li>
            <li><a href="#annonces">Annonces</a></li>
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
    @php
        $filieres = app('App\Http\Controllers\filieres')->findfilfor($formation->id_formation);
    @endphp
        <a href="{{url('filiereWelc')}}?idFormation={{$formation->id_formation}}">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <p>{{ $formation->nomformation }}</p>
                    </div>
                        <div class="card-back">
                            @if(count($filieres)>0)
                                @foreach ($filieres as $filiere)
                                    <p style="font-size: 10px">{{$filiere->nom}}</p>
                                @endforeach
                            @else
                                <p>No filiere in this formation available.</p>
                            @endif
                    </div>
                </div>
            </div>
        </a>



@endforeach
{{-- <div id="choix1 filchoix" class="e-card playing cardW " > --}}


</div>

<h1 id="annonces" class="heading">Annonce list</h1>

<div class="listAnnonce" style="display: flex;align-items:center;justify-content:center;flex-wrap: wrap;">
    @php
        $annonces = app('App\Http\Controllers\Annonces')->showAllAnn();
    @endphp

    @if(is_countable($annonces) && count($annonces) > 0)
        @foreach ($annonces as $annonce)
        <div class="ann" style="display: flex;align-items:center;justify-content:start;margin-bottom:30px">
            <div class="imgholder" style="margin: 20px">
            </div>
            <div>
                <h2 class="">{{ app('App\Http\Controllers\filieres')->findfil($annonce->id_filiere)->nom }}</h2>
                <h4 class="" style="padding: 5px">{{ $annonce->resume }}</h4>
                <p>{{ $annonce->Description }}</p>
            </div>
        </div>
            {{-- <div class="annonce-card" style="display: flex;flex-direction: column;align-items:center;justify-content:center;">
                <div class="imgholder">
                </div>
                <h1 class="head-card">{{ app('App\Http\Controllers\filieres')->findfil($annonce->id_filiere)->nom }}</h1>
                <div class="containerAnnonceText" style="width: 100%;">
                    <h1 class="head-card">{{ $annonce->titre }}</h1>
                    <p class="text-card" style="width: 100%;padding: 5px">{{ $annonce->resume }}</p>
                </div>
            </div> --}}
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
    <div class="grid">
        <div>
            <h3>Liens Utiles</h3>
            <ul>
                <li><a href="https://fstt.ac.ma">Site de l'Université</a></li>
                <li><a href="www.enssup.gov.ma">Enseignement Supérieur</a></li>
                <li><a href="https://jamiati.ma/fr">Portail des universités marocaines</a></li>
                <li><a href="http://www.cse.ma/fr/">Le Conseil Supérieur de l’Enseignement</a></li>
                <li><a href="http://www.cnr.ac.ma/">CNRST</a></li>
                <li><a href="https://www.maroc.ma/">Portail National du Maroc</a></li>
            </ul>
        </div>
        <div>
            <h3>Localisation</h3>
            <iframe style="width: 400px;height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.651280986865!2d-5.894000527825127!3d35.734793877154324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d71f995045%3A0xc35a87c33b565280!2sFaculty%20of%20Sciences%20and%20Technologies%20Tangier!5e0!3m2!1sen!2sma!4v1707051622177!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <h3>Contactez Nous</h3>
            <div class="cont">
                <i aria-hidden="true" class="fas fa-phone-square-alt"></i>
                <p><strong>+ 212 (0) 5 39 39 39 54 / 55</strong></p>
            </div>
            <div class="cont">
                <i aria-hidden="true" class="fas fa-envelope"></i>
                <p><strong>administration.fstt@uae.ac.ma</strong></p>
            </div>
            <div class="social-icons">
                <a target="_blank"  href="https://web.facebook.com/fstt.ac.ma" style="color:#fff"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank"  href="https://www.instagram.com/fsttanger/" style="color:#fff"><i class="fab fa-instagram"></i></a>
                <a target="_blank"  href="https://www.linkedin.com/school/fsttanger/"><i class="fab fa-linkedin" style="color:#fff"></i></a>
                <a target="_blank"  href="https://twitter.com/fsttofficielle" style="color:#fff"><i class="fab fa-twitter"></i></a>



            </div>
        </div>
    </div>
{{-- <div class="container">
    <i class="fa fa-graduation-cap" aria-hidden="true"> <h2>MystudyMate</h2></i>
    <p>Contactez Nous</p>
    <div class="social-icons">
        <a target="_blank"  href="https://web.facebook.com/fstt.ac.ma" style="color:#fff"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank"  href="https://www.instagram.com/fsttanger/" style="color:#fff"><i class="fab fa-instagram"></i></a>
        <a target="_blank"  href="https://www.linkedin.com/school/fsttanger/"><i class="fab fa-linkedin" style="color:#fff"></i></a>
        <a target="_blank"  href="https://twitter.com/fsttofficielle" style="color:#fff"><i class="fab fa-twitter"></i></a>



    </div>
</div> --}}
</div>
