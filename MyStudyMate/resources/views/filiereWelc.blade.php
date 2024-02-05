@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css",'resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css","resources/css/welcome.css"])
@extends('layouts.welcom')
@section('content')
<section id="course" style="background-image: none">
    <h1 class="h1" style="width: 90%">Filieres</h1>
<div class="box-container">
    @php
    if(isset($_GET['idFormation'])){
        $idFormation = $_GET['idFormation'];
        $filieres = app('App\Http\Controllers\filieres')->findfilfor($idFormation);
    }
    @endphp
    @foreach ($filieres as $filiere)
    <a href="{{url('filierePage')}}?idFiliere={{$filiere->id_filiere}}">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <p>{{ $filiere->nom }}</p>
                </div>
                    <div class="card-back">
                            <p style="font-size: 15px">{{$filiere->contenuFiliere}}</p>

                </div>
            </div>
        </div>
    </a>
    @endforeach
    </div>
</section>





@endsection
