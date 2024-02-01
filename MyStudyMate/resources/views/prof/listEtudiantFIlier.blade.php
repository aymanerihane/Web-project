@php
            if (isset($_GET['idFil'])) {
                $id = $_GET['idFil'];
                $etudiants=app('App\Http\Controllers\addetudiant')->findetudeByFiliere($id);
            }
            @endphp
            @if (count($etudiants)>1)
            @foreach ($etudiants as $etudiant)
            <div class="message mes" data-id="{{$etudiant->CNE}}">
                <label class="container">
                    <input type="checkbox" name="demandes" id="">
                    <div class="line"></div>
                    <div class="line line-indicator"></div>
                </label>
                <div>
                    <h3 class="NameOfEtud mes" data-id="{{$etudiant->CNE}}">{{$etudiant->nom}}</h3>
                    {{-- <p class="objectDemande mes" data-id="{{$demande->id_demande}}">{{$demande->DescripDemande}}</p> --}}
                </div>
            </div>
            @endforeach
            @else
            <h3 class="NameOfEtud mes">no student in this filiere</h3>
            @endif
