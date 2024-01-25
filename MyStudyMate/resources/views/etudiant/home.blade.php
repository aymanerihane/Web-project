@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css"])
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
                    <div class="nav-button btn1 active-side1 active-side"><span>Emplois du Temps</span></div>
                    <div class="nav-button btn2"><span>Annonces des Professeurs</span></div>
                    <div class="nav-button btn3"><span>Demandes</span></div>
                    {{-- <div class="nav-button btn4"><span> Demander Rendez-vous</span></div> --}}
                    <hr class="hr"/>
                    {{-- <div class="nav-button btn5"><span>Justifier Absence</span></div> --}}
                    {{-- <div class="nav-button btn6"><span>Demander Changement Groupe TP</span></div> --}}
                    {{-- <div class="nav-button btn7"><span>Signaler Pannes Matérielles</span></div><!-- just for deleguer --> --}}
                     {{-- <div class="nav-button btn8"><span>Signaler Incidents Quotidiens</span></div><!-- just for deleguer --> --}}

                     <div id="footer-nav">
                        <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fefefe" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
                        <ul class="sign foo">
                            <p class="name"> {{ Auth::user()->name }} </p>
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

                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
        </div>


        <div class="center">
            {{-- @include('auth.affectationSalle')
            @include('auth.emploisTemps') --}}
            {{-- @include('auth.addEtudiant') --}}

        </div>

    </div>
</div>

@endsection

