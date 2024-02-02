@php
if (isset($_GET['dep'])) {
    $id=$_GET['dep'];
    $modules = [];
    $filieres = app('App\Http\Controllers\filieres')->findfildep($id);
    foreach ($filieres as $filiere) {
        $modules[] = app('App\Http\Controllers\modules')->select($filiere->id_filiere);
    }
}
@endphp
<div style="width: 100%;display:flex;justify-content: center;">
    <div class="departement">
        <Label>Responsable</Label><br>
        <span class="custom-dropdown small">
            <select name="respo" required>
                <option class="option" ></option>
                @foreach ($modules as $module)
                @foreach ($module as $mod)
                @php
                $prof = app('App\Http\Controllers\addEtudiant')->findprof($mod->MatriculeProf);
                $pr = app('App\Http\Controllers\addEtudiant')->finduser($prof->id_Utilisateur);
                @endphp
                <option class="option" value="{{ $prof->MatriculeProf }}">{{ $pr->name }}</option>
                @endforeach
                @endforeach
            </select>
        </span>
    </div>
</div>
