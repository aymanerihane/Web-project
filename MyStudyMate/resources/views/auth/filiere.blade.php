@php
if (isset($_GET['fil'])) {
    $id=$_GET['fil'];
    $filieres = app('App\Http\Controllers\filieres')->findfildep($id);
}
@endphp
<div style="width: 100%;display:flex;justify-content: center;">
    <div class="departement">
        <Label>Filieres :</Label><br>
        <span class="custom-dropdown small">
            <select name="fil" id="filid" required>
                @foreach ($filieres as $filiere)
                <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
                @endforeach
            </select>
        </span>
    </div>
</div>
<div id="prof"></div>

