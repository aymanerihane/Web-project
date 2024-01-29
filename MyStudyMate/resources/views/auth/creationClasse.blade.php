
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
            <span class="custom-dropdown small">
                <Select class="select" name="type">
                    @foreach (['Cours','TD','TP'] as $type)
                        <option class="option" value="{{ $type }}" >{{ $type }}</option>
                    @endforeach
                </Select>
            </span>
    </div>
        <div class="departement">
            <Label>Département</Label><br>
            <span class="custom-dropdown small">
                <select name="dep">
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
    <button class="asso" type="button" id="affectbut">
        <div class="btnLogin"><span>Associer</span></div>
    </button>
</form>
</div><br>
<h1 class="h1">Liste des salle</h1>
<Label>Departements :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="depart">
                            <option class="option" value="2" disabled selected></option>
                            <option class="option" value="libre" >Salles libres</option>
                            <option class="option" value="0" >All</option>
                            @php
                    $departs = app('App\Http\Controllers\Departements')->showDepartements();
                    @endphp
                    @if($departs->count() > 0)
                        @foreach ($departs as $depart)
                            <option class="option" value="{{ $depart->id_departement }}">{{ $depart->nom }}</option>
                        @endforeach
                            </Select>
                            @endif
                        </Select>
                    </span>
<div id="tabsalle"></div>
