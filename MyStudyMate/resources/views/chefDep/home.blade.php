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
                    <div class="nav-button btn1 active-side1 active-side"><span>Gérer Emplois du Temps Salle</span></div>
                    <div class="nav-button btn2"><span>Gérer Annonces Département</span></div>


                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
        </div>


        <div class="center">

        </div>

    </div>
</div>
@endsection

