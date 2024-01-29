
<div class="manup">
    <form id="afctform">
        @csrf
    <div class="gestion">
        <div class="salle" id="salafct">
                <Label>Salle :</Label><br>
                <input type="text" name=nomClasse>

        </div>
        <div class="salle">
            <Label>Type :</Label><br>
            <input type="number" name="nbrEtud">

    </div>

        <div class="departement">
            <Label>Département</Label><br>
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
    <button class="asso" type="button" id="affectbut">
        <div class="btnLogin"><span>Associer</span></div>
    </button>
</form>
</div><br>
<h1 class="h1">Liste des salle</h1>
<Label>Departements :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="depart">

                            @php
                    $classes = app('App\Http\Controllers\Departements')->showClasses();
                    @endphp
                    @if($classes->count() > 0)
                        @foreach ($classes as $classe)
                            <option class="option" value="{{ $classe->id_classe}}">{{ $classe->id_classe }}</option>
                        @endforeach
                            </Select>
                            @endif
                        </Select>
                    </span>
<div id="tabsalle"></div>
