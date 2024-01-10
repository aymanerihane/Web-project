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
                    <div class="nav-button btn3"><span> Demander lettre Recommandation</span></div>
                    <div class="nav-button btn4"><span> Demander Rendez-vous</span></div>
                    <hr class="hr"/>
                    <div class="nav-button btn5"><span>Justifier Absence</span></div>
                    <div class="nav-button btn6"><span>Demander Changement Groupe TP</span></div>
                    <div class="nav-button btn7"><span>Signaler Pannes Matérielles</span></div><!-- just for deleguer -->
                     <div class="nav-button btn8"><span>Signaler Incidents Quotidiens</span></div><!-- just for deleguer -->

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

