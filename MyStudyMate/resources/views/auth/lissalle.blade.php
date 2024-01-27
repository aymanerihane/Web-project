@php
if(isset($_GET['salle'])){
$id=$_GET['salle'];
if ($id==0) {
    $salles=app('App\Http\Controllers\Locals')->showlocals();
}
else
$salles=app('App\Http\Controllers\Locals')->getlocaldep($id);
}
@endphp
<table id="tableMember" border="1">
    <tr id="first-tr">
        <th>Nom de salle</th>
        <th>Type</th>
        <th>Departement</th>
    </tr>
@foreach ($salles as $salle)
@php
    $departe = app('App\Http\Controllers\Departements')->finddep($salle->id_departement);

@endphp
    <tr>
        <td>{{ $salle->nom }}</td>
        <td>{{ $salle->type }}</td>
        <td>{{ $departe->nom }}</td>
    </tr>
@endforeach

</table>
