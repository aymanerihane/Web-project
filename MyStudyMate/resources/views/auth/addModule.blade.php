
<div class="manup">
    <form id="afctform" method="POST" action="{{route('module')}}">
        @csrf
    <div class="gestion">
        <div class="salle">
                <Label>Nom Module :</Label><br>
                <input type="text" name="nomFiliere" required>

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
<div id="fil"></div>
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
    <button class="asso" type="button" id="affectmodule" style="width: 100%;display:flex;justify-content: center;">
        <div class="btnLogin"><span>ADD</span></div>
    </button>
</form>

</div><br>
<h1 class="h1">Liste des Modules</h1>

<Label>Filieres :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" id="listCla"  style="margin-bottom: 15px;" >
                            <option class="option" value="2" disabled selected>Filiere</option>
                            @php
                    $filieres = app('App\Http\Controllers\filieres')->showFilieres();
                    @endphp
                    @if($filieres->count() > 0)
                    @foreach ($filieres as $filiere)
                            <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
                            {{-- echo $filiere->id_filiere; --}}
                        @endforeach
                        @endif
                        </Select>
                    </span>




<div id="tableModule">

</div>
