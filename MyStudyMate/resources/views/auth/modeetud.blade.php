@php
if(isset($_GET['formation'])){
$id=$_GET['formation'];
$filieres=app('App\Http\Controllers\filieres')->findfilfor($id);
}
@endphp

<div style="flex: 1">

<Label>Filieres :</Label><br>
<span class="custom-dropdown small" >
    <Select class="select" name="filiere" style="margin-bottom: 15px;" id="classetudfor">
        <option class="option" value=""></option>

@if($filieres->count() > 0)
@foreach ($filieres as $filiere)
    <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
@endforeach
@endif
</Select>
</span>
</div>
<div id="classeetud">

</div>
