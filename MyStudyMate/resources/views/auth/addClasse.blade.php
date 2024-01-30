
<div class="manup">
    <form id="afctform">
        @csrf
    <div class="gestion">
        <div class="salle">
                <Label>Nom classe :</Label><br>
                <input type="text" name=nomClasse>

        </div>
        <div class="salle">
            <Label>Nombre etudiant du salle :</Label><br>
            <input type="number" name="nbrEtud">

    </div>


</div>
<div style="width: 100%;display:flex;justify-content: center;">

    <div class="departement">
        <Label>filiere</Label><br>
        <span class="custom-dropdown small">
            <select name="fil">
                @php
                $filieres = app('App\Http\Controllers\filieres')->showFilieres();
                @endphp
                @foreach ($filieres as $filiere)
                <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
                @endforeach
            </select>
        </span>
    </div>
</div>
    <button class="asso" type="button" id="affectclasse" style="width: 100%;display:flex;justify-content: center;">
        <div class="btnLogin"><span>ADD</span></div>
    </button>
</form>

</div><br>
<h1 class="h1">Liste des classe</h1>
<Label>Filiere :</Label><br>
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




<div id="tabclasse"></div>
