@php
if (iss) {
    $filieres = app('App\Http\Controllers\Departements')->findfilfor($id);
    foreach ($filieres as $filiere) {
        $modules+=app('App\Http\Controllers\Departements')->select($filiere->id_filiere);
    }
}
@endphp
<div style="width: 100%;display:flex;justify-content: center;">
    <div class="departement">
        <Label>Responsable</Label><br>
        <span class="custom-dropdown small">
            <select name="respo" required>
                @foreach ($modules as $module)
                @php
                $profs = app('App\Http\Controllers\addEtudiant')->findprof($module->MatriculeProf);
                @endphp
                <option class="option" value="{{ $departement->id_departement }}">{{ $departement->nom }}</option>
                @endforeach
                @endforeach
            </select>
        </span>
    </div>
</div>
