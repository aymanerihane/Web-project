
<div class="manup">
    <form id="afctform">
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
        <Label>filiere</Label><br>
        <span class="custom-dropdown small">
            <select name="departement" required>
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
    <button class="asso" type="button" id="affectclasse" style="width: 100%;display:flex;justify-content: center;">
        <div class="btnLogin"><span>ADD</span></div>
    </button>
</form>

</div><br>
<h1 class="h1">Liste des Filiere</h1>



<div id="tabclasse">

</div>
