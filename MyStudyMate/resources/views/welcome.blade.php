
@vite(['resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css"])
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



<head>
<style>
    /*Start variable*/
:root{
--main-color:#c0c4c5;
--transparent-color:rgb(15 16 143 /70%);
}

body{
font-family: 'Open Sans', sans-serif;

}
ul{
list-style: none;
}
.container{
padding-left: 15px;
padding-right: 15px;
margin-left: auto;
margin-right: auto;
}
/*small*/
@media (min-width: 768px) {
.container{
    width:750px;
}

}
/*medium*/
@media (min-width: 992px) {
.container{
    width:970px;
}

}
/*large*/
@media (min-width: 1200px) {
.container{
    width:1170px;
}

}
/*start header*/
header{
position: absolute;
left: 0;
width: 100%;
z-index: 2;
}
header .container{
display: flex;
justify-content: space-between;
align-items: center;
position: relative;
border-bottom: 1px solid #a2a2a2 ;
min-height: 97px;
}

header.container::after{
content: "";
position: absolute;
height: 1px;
background-color:#a2a2a2;
bottom: -1;
width: calc(100% - 30px);
left: 15px;

}
header nav{
flex: 1;
display: flex;
align-items: center;
justify-content: flex-end;

}
header nav .toggle-menu{
font-size: 22px;

}
@media (min-width: 768px) {
header nav .toggle-menu{
    display: none;

}

}
header nav ul{
display: flex;

}
@media (max-width:767px) {
header nav ul {
    display: none;
}
header nav .toggle-menu:hover + ul{
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: rgb(0 0 0/ 50%);
}
header nav  ul li a {
    padding: 15px !important;
}
}

header nav ul li a{
display: block;
color: black;
text-decoration: none;
font-size: 14px;
transition: 0.3s;
padding: 40px 10px;
}
header nav ul li a.active,
header nav ul li a:hover{
color: var(--main-color);
border-bottom: 1px solid var(--main-color);
}
header nav .form{
width: 40px;
height: 30px;
position: relative;
margin-left: 30px;
border-left: 1px solid black ;
}
header nav .form i{
position: absolute;
font-size: 20px;
top: 50%;
transform: translateY(-50%);
right: 0;
}
/*End header*/
/*Start landing*/
.landing{
min-height:100vh;
background-color: #1f2021;
background-image: url('{{ asset('storage/images/study.jpg') }}');
background-size: cover;
position: relative;
}
.landing .overlay{
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
background-color: rgb(0 0 0 / 60%);
}
.landing .text{
position: absolute;
left: 0;
top: 50%;
transform: translateY(-50%);
width: 50%;
padding:50px;
background-color: #a58e6a;
color: aliceblue;
display: flex;
justify-content: flex-end;
}

.landing .text .content{
max-width: 500px;
}
@media (max-width: 767px) {
.landing  .text{
    width: 100%;
}
.landing .text .content{
    max-width: 100%;
}
}
.content h2{
font-size: 32px;
font-weight: normal;
line-height: 1.5;
margin-bottom: 20px;

}
.content p{
font-size: 14px;
line-height: 2;
}

.landing .change-background{
position: absolute;
top: 50%;
transform: translateY(-50%);
color: #ddd;
}

@media (max-width: 767px) {
.landing .change-background{
    display: none;
}
}
.landing .fa-angle-left{
left: 30px;

}
.landing .fa-angle-right{
right: 30px;
}
.landing .bullets{
position: absolute;
left: 50%;
transform: translateX(-50%);
bottom: 30px;
display: flex;
}
.landing .bullets li{
width: 20px;
height: 20px;
border: 1px solid white;
border-radius: 50%;
margin-right: 10px;
}
.landing .bullets li.active{
background-color: var(--main-color);
border-color: var(--main-color);
}
/*End landing*/
/*formation*/
#course {
display: -ms-grid;
display: grid;
place-items: center;
min-height: 100vh;
width: 100vw;
}

#course .heading {
font-size: 4rem;
padding-top: 5rem;
margin: 2rem 0;
color: #fff;
text-align: center;
position: relative;
color: #a58e6a;
}

#course .heading::after {
content: '';
position: absolute;
bottom: -1.5rem;
left: 50%;
-webkit-transform: translateX(-50%);
        transform: translateX(-50%);
height: .3rem;
width: 60%;
border-radius: 5rem;
background: #333;
}

#course .box-container {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
width: 90%;
-ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

#course .box-container .box {
height: 25rem;
width: 30rem;
border-radius: .5rem;
-webkit-box-shadow: 0 0 .3rem #333;
        box-shadow: 0 0 .3rem #333;
margin: 2rem;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-flow: column;
        flex-flow: column;
cursor: pointer;
overflow: hidden;
}

#course .box-container .box img {
height: 100%;
width: 85%;
-webkit-transform: translateY(3rem);
        transform: translateY(3rem);
}

#course .box-container .box p {
font-size: 1.3rem;
text-align: center;
color:#fff;
opacity: 1;
-webkit-transform: translateY(12rem);
        transform: translateY(12rem);
padding: 0 .4rem;

}

#course .box-container .box:hover p {
opacity: 1;
-webkit-transform: translateY(0rem);
        transform: translateY(0rem);
}

#course .box-container .box:hover img {
height: 50%;
width: 50%;
-webkit-transform: translateY(-2rem);
        transform: translateY(-2rem);
}

#course .box-container .box:hover {
background: #333;
}

/*services*/
#service {
display: -ms-grid;
display: grid;
place-items: center;
min-height: 100vh;
width: 100vw;
background:#a58e6a;
}

#service .heading {
font-size: 4rem;
padding-top: 5rem;
margin: 2rem 0;
color: #fff;
text-align: center;
position: relative;
}

#service .heading::after {
content: '';
position: absolute;
bottom: -1.5rem;
left: 50%;
-webkit-transform: translateX(-50%);
        transform: translateX(-50%);
height: .3rem;
width: 60%;
border-radius: 5rem;
background: #333;
}

#service .box-container {
width: 90%;
}

#service .box-container .box {
background: #fff;
max-width: 60rem;
border-radius: .5rem;
-webkit-box-shadow: 0 0 .3rem #333;
        box-shadow: 0 0 .3rem #333;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-ms-flex-pack: distribute;
    justify-content: space-around;
padding: 4rem 2rem;
margin: 2rem;
clear: both;
}

#service .box-container .box img {
height: 7rem;
margin-right: 4rem;
}

#service .box-container .box .info {
padding-left: 2.5rem;
border-left: 0.4rem solid #a58e6a;
}

#service .box-container .box .info h2 {
font-size: 3rem;
color: #a58e6a;
}

#service .box-container .box .info p {
font-size: 1.5rem;
color: #333;
}

#service .box-container .box:nth-child(2) {
float: right;
}


/*footer*/
.footer{
padding-top:20px;
padding-bottom: 30px;
background-color:grey;
text-align: center;
color: white;
position: relative;
}
.footer.social-icons i{
padding:  10px 15px;
}
</style>
</head>
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

<div class="box" data-aos="flip-right">
<img style="margin-bottom: 60px;" src="{{ asset('storage/images/deust.jpeg') }}" alt="">
<p>DEUST</p>
</div>

<div class="box" data-aos="flip-down">
<img style="margin-bottom: 60px;" src="{{ asset('storage/images/master.jpg') }}" alt="">
<p>LICENSE EN SCIENCE TECHNIQUE</p>
</div>

<div class="box" data-aos="flip-left">
<img style="margin-bottom: 60px;" src="{{ asset('storage/images/deust.jpeg') }}" alt="">
<p>MASTER EN SCIENCE TECHNIQUE</p>
</div>

<div class="box" data-aos="flip-right">
<img style="margin-bottom: 60px;" src="{{ asset('storage/images/master.jpg') }}" alt="">
<p>INGENIEUR D'ETAT</p>
</div>



</div>

<h1 class="heading">Annonce list</h1>

<div class="listAnnonce">
    @php
        $annonces = app('App\Http\Controllers\Annonces')->showAllAnn();
    @endphp

    @if(is_countable($annonces) && count($annonces) > 0)
        @foreach ($annonces as $annonce)
            <div class="annonce-card" style="display: flex;flex-direction: column;align-items:center;justify-content:center;">
                <h1 class="head-card">{{ app('App\Http\Controllers\filieres')->findfil($annonce->id_filiere)->nom }}</h1>
                <div class="imgholder">
                    {{-- You can add an image here if needed --}}
                </div>
                <div class="containerAnnonceText" style="width: 100%;">
                    <h1 class="head-card">{{ $annonce->titre }}</h1>
                    <p class="text-card" style="width: 100%;">{{ $annonce->resume }}</p>
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

<!-- footer -->
<div class="footer">
<div class="container">
    <i class="fa fa-graduation-cap" aria-hidden="true"> <h2>MystudyMate</h2></i>
    <p>Contactez Nous</p>
    <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fas fa-home"></i>
        <i class="fab fa-linkedin"></i>



    </div>
</div>
</div>
