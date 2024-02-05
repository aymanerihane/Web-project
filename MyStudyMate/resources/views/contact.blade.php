{{-- @vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css"])
@vite(['resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css","resources/css/welcome.css"]) --}}
@extends('layouts.welcom')
@section('content')
<style>
    .box{
        color: black;
        background-color: #a58e6a;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 70%;
        height: 30%;
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        border-radius: 10px;
        box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
    }
    .cont{
        display: flex;
        align-items: center;
    }
    i{
        color: white;
        width: 40px;
        font-size: 25px;
        margin: 10px
    }
    p{
        margin: 10px
    }
    iframe{
        position: absolute;
        top: 110%;
        width: 100%;
        height: 100%;
        margin-bottom: 30px;
        box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 6px 35px -4px rgba(0,0,0,0.75);
    }
</style>
<div style="display: flex;justify-content:center;align-items:center">
    <div style="width: 70%;height:100px">
        <h1 class="h1">Faculté des Sciences et Techniques de Tanger
        </h1>
        <div class="box">
            <div class="cont">
                <i class="fa-solid fa-location-dot"></i>
                <p><strong>Ancienne Route de l’Aéroport, Km 10, Ziaten. BP : 416. Tanger - Maroc</strong></p>
            </div>
            <div class="cont">
                <i class="fa-solid fa-phone"></i>
                <p><strong>+ 212 (0) 5 39 39 39 54/55</strong></p>
            </div>
            <div class="cont">
                <i aria-hidden="true" class="fas fa-fax"></i>
                <p><strong>+212 (0) 5 39 39 39 53</strong></p>
            </div>
            <div class="cont">
                <i aria-hidden="true" class="fas fa-envelope"></i>
                <p><strong>administration(at)fstt.ac.ma</strong></p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.651280986865!2d-5.894000527825127!3d35.734793877154324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d71f995045%3A0xc35a87c33b565280!2sFaculty%20of%20Sciences%20and%20Technologies%20Tangier!5e0!3m2!1sen!2sma!4v1707051622177!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection

<script src="https://kit.fontawesome.com/e9d0d16c17.js" crossorigin="anonymous"></script>
