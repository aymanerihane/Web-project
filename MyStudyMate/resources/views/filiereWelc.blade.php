@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css",'resources/js/loader.js',"resources/CSS/annonce.css","resources/js/admin_ajax.js",'resources/css/Normalize.css','resources/css/header.css',"resources/css/admin.css","resources/css/loader.css","resources/css/welcome.css"])

<section id="course">
<div class="box-container">

    @php
    if(isset($_GET['idFormation'])){
        $idFormation = $_GET['idFormation'];
        $filieres = app('App\Http\Controllers\filieres')->findfilfor($idFormation);
    }
    @endphp
    @foreach ($filieres as $filiere)
    <a href="{{url('filierePage')}}?idFiliere={{$filiere->id_filiere}}">
        <div class="box" data-aos="flip-right">
        <img style="margin-bottom: 60px;" src="{{ asset('storage/images/deust.jpeg') }}" alt="">
        <p>{{ $filiere->nom }}</p>
        </div>
    </a>
    @endforeach
    </div>
</section>
