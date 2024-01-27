@php
if(isset($_GET['salle'])){
$id=$_GET['salle'];
if ($id=="libre") {
    $salles = array();
     for ($i = 1; $i <= 10; $i++) {
    $salles[] = 'salle' . $i;
  }
}
elseif($id==0){
$salles=app('App\Http\Controllers\Locals')->showlocals();
}
else {
    $salles=app('App\Http\Controllers\Locals')->getlocaldep($id);
}
}
@endphp
<table id="tableMember" border="1">

    @if ($id=="libre")
    <tr id="first-tr">
        <th>Nom de salle</th>
        <th>Associe</th>
        <th>Supprimer Association</th>
    </tr>
    @foreach ($salles as $salle)
    @php
      if(app('App\Http\Controllers\Locals')->checklocal($salle))
      $test="Non";
    else
    $test="Oui";
    @endphp
    <tr>
        <td>{{ $salle }}</td>
        <td>{{ $test }}</td>
        @if ($test=="Oui")
        <td class="supsal" data-id="{{$salle}}">Supprimer Association</td>
        @endif
    </tr>
    @endforeach
    @else
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
    @endif

</table>
