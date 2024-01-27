
<div class="manup">
    <div class="gestion">
        <div class="salle">
            <Label>Salle :</Label><br>
            <span class="custom-dropdown small">
                <Select class="select">
                    @php
                    $salles = app('App\Http\Controllers\Locals')->showLocals();
                    @endphp
                    @if($salles->count() > 0)
                        @foreach ($salles as $salle)
                            <option class="option" value="{{ $salle->id_salle }}">{{ $salle->nom }}</option>
                        @endforeach
                    @else
                        <option value="">aucune salle n'est disponible</option>
                    @endif
                </Select>
            </span>
        </div>
        <div class="departement">
            <Label>Département</Label><br>
            <span class="custom-dropdown small">
                <select>
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
    <button class="asso">
        <div class="btnLogin"><span>Associer</span></div>
    </button>
</div><br>
<h1 class="h1">Liste des salle</h1>
<Label>Departements :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="depart">
                            <option class="option" value="2" disabled selected></option>
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
