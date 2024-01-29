@php
if(isset($_GET['formation'])){
$id=$_GET['formation'];
$filieres=app('App\Http\Controllers\filieres')->findfilfor($id);
}
@endphp
<Label>Groupe TP :</Label><br>
<span class="custom-dropdown small" >
    <Select class="select" name="groupTP" style="margin-bottom: 15px;">
        <option class="option" value="1">Group 1</option>
        <option class="option" value="2">Group 2</option>
        <option class="option" value="3">Group 3</option>
        <option class="option" value="4">Group 4</option>
        <option class="option" value="5">Group 5</option>
        <option class="option" value="6">Group 6</option>
        <option class="option" value="7">Group 7</option>
    </Select>
</span>

<div style="flex: 1">

<Label>Filiere :</Label><br>
<span class="custom-dropdown small" >
    <Select class="select" name="filiere" style="margin-bottom: 15px;">
@if($filieres->count() > 0)
@foreach ($filieres as $filiere)
    <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
@endforeach
@endif
</Select>
</span>
</div>
<div id="clas">

</div>
