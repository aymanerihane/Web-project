<div class="manup">
    <div class="gestion">
        <div class="salle">
            <Label>Salle :</Label><br>
            <Select>
                @php
                $salles = app('App\Http\Controllers\Locals')->showLocals();
                @endphp
                @if($salles->count() > 0)
                    @foreach ($salles as $salle)
                        <option value="{{ $salle->id_salle }}">{{ $salle->nom }}</option>
                    @endforeach
                @else
                    <option value="">aucune salle n'est disponible</option>
                @endif
            </Select>
        </div>
        <div class="departement">
            <Label>Département</Label><br>
            <select name="" id="">
                @php
                $departements = app('App\Http\Controllers\Departements')->showDepartements();
                @endphp
                @foreach ($departements as $departement)
                    <option value="{{ $departement->id_departement }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button>Associer</button>
</div>
