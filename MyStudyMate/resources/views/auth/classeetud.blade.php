
@php
if(isset($_GET['filiere'])){
$id=$_GET['filiere'];
$classes=app('App\Http\Controllers\classes')->showclasfil($id);
}
@endphp
<div style="flex: 1">

<Label>Classes :</Label><br>
<span class="custom-dropdown small" >
    <Select class="select" name="classe" style="margin-bottom: 15px;" id="tpetudfor">
        <option class="option" value=""></option>
@if($classes->count() > 0)
@foreach ($classes as $classe)
    <option class="option" value="{{ $classe->id_classe }}">{{ $classe->nom }}</option>
@endforeach
@endif
</Select>
</span>
</div>
<div id="tpetud">

</div>


