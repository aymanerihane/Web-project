
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
</div>
<h1 class="h1">Tableau des Salles et departement d'affectation</h1>
{{-- <table>
table of saleles and departement
</table> --}}

