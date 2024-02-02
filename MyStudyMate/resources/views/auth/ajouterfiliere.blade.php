
<div class="manup">
    <form id="afctform" method="POST" action="{{route('filiere')}}">
        @csrf
    <div class="gestion">
        <div class="salle">
                <Label>Nom Filiere :</Label><br>
                <input type="text" name="nomFiliere" required>

        </div>
        <div class="salle">
            <Label>Contenu Filiere :</Label><br>
            <input type="text" name="Contenu" required>

    </div>


</div>
<div style="width: 100%;display:flex;justify-content: center;">

    <div class="departement">
        <Label>Formations</Label><br>
        <span class="custom-dropdown small">
            <select name="fromation" required>
                @php
                $formations = app('App\Http\Controllers\formation')->showFormation();
                @endphp
                @foreach ($formations as $formation)
                <option class="option" value="{{ $formation->id_formation }}">{{ $formation->nomformation }}</option>
                @endforeach
            </select>
        </span>
    </div>
</div>
<div style="width: 100%;display:flex;justify-content: center;">

    <div class="departement">
        <Label>Departements</Label><br>
        <span class="custom-dropdown small">
            <select name="departement" id="dep" required>
                <option class="option" value=""></option>
                @php
                $departements = app('App\Http\Controllers\Departements')->showDepartements();
                @endphp
                @foreach ($departements as $departement)
                <option class="option" value="{{ $departement->id_departement }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </span>
    </div>
</div>
<div id="respfil"></div>

{{-- <div style="width: 100%;display:flex;justify-content: center;">

    <div class="departement">
        <Label>filiere</Label><br>
        <span class="custom-dropdown small">
            <select name="respFiliere" required>
                @php
                $departements = app('App\Http\Controllers\proffesseur')->showFilieres();
                @endphp
                @foreach ($departements as $departement)
                <option class="option" value="{{ $departement->id_departement }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </span>
    </div>
</div> --}}
    <button class="asso" type="submit"  style="width: 100%;display:flex;justify-content: center;">
        <div class="btnLogin"><span>ADD</span></div>
    </button>
</form>

</div><br>
<h1 class="h1">Liste des filieres</h1>
<Label>Formation :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" id="listfor"  style="margin-bottom: 15px;" >
                            <option class="option" value="2" disabled selected>Filiere</option>
                            @php
                    $formations = app('App\Http\Controllers\formation')->showFormation();
                    @endphp
                    @if($formations->count() > 0)
                    @foreach ($formations as $formation)
                            <option class="option" value="{{ $formation->id_formation }}">{{ $formation->nomformation }}</option>
                        @endforeach
                        @endif
                        </Select>
                    </span>




<div id="tabfiliere"></div>
