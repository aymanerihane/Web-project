

@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css"])

@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in as Responsable service Pedagogique!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

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
                    <div class="nav-button btn2"><span>Modification du role des professeurs</span></div>
                    <div class="nav-button btn3"><span>Affectation des Salle</span></div>
                    <hr class="hr"/>
                    <div class="nav-button btn3"><span>Inscrire d'une nouvelle classe dans un module</span></div>
                    <div class="nav-button btn5"><span>Ajouter et modifier le contenu d'une filière</span></div>

                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
            <input id="nav-footer-toggle" type="checkbox"/>
        </div>


        <div class="center">
            {{-- @include('auth.affectationSalle') --}}
            {{-- @include('auth.emploisTemps') --}}
            {{-- @include('auth.addEtudiant') --}}
        </div>

    </div>
</div>

@endsection
