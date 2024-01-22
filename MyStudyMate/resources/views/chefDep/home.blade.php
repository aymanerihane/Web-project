

@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css","resources/CSS/header.css"])
@vite(["resources/css/sign.css"])
@extends('layouts.app')

@section('content')


<div class="contAllOp">

    <div class="conatinerAd">
        <div id="nav-bar">
            <input id="nav-toggle" type="checkbox"/>
            <div id="nav-header"><h1 id="nav-title">Menu</h1>
                <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                <hr/>
            </div>
            <div id="nav-content">
                <div class="nav-button btn1 active-side1 active-side"><span>Gérer Emplois du Temps Salle</span></div>
                <div class="nav-button btn2"><span>Gérer Annonces Département</span></div>


                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
            {{-- <div class="nav-footer" style="z-index: 1999">
                <a href="{{url('chefDep/home')}}">Change Mode</a>
            </div> --}}
            <div id="footer-nav" style="bottom: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fefefe" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
                <ul class="sign foo">
                    <p class="name" style="position: absolute;top: -20px;"> {{ Auth::user()->name }} </p>
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
                    </li>

                </ul>
            </div>
        </div>
        <div class="center">
            {{-- @include('chefDep.gererAnnonces') --}}
        </div>

    </div>
</div>
@endsection

