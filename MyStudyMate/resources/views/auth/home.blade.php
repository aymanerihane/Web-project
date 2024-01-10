

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
                    <div class="nav-button btn1 active-side1 active-side"><span>Gestion des emplois du temps</span></div>
                    <div class="nav-button btn2"><span>Liste des Menbres</span></div>
                    <div class="nav-button btn3"><span>Affectation des Salle</span></div>
                    <hr class="hr"/>
                    <div class="nav-button btn4"><span>Inscrire d'une nouvelle classe dans un module</span></div>
                    <div class="nav-button btn5"><span>Ajouter et modifier le contenu d'une filière</span></div>
                    <div class="nav-button btn6"><span>Ajouter Membres</span></div>

                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
        </div>


        <div class="center">
            {{-- @include('auth.affectationSalle') --}}
            {{-- @include('auth.emploisTemps') --}}
            {{-- @include('auth.addEtudiant') --}}
        </div>

    </div>
</div>

@endsection
