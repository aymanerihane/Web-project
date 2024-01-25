@php
if(isset($_GET['filiere'])){
$id=$_GET['filiere'];
$emplois=app('App\Http\Controllers\emploisDuTemps')->select($id);
}
@endphp
<table>
<tr>
    <th></th>
    @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
    <th>{{ $heure }}</th>
    @endforeach
</tr>
@foreach ($emplois as $emploi )
@foreach(['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI','SAMEDI'] as $jour)
<tr value="{{ $jour }}">
    <td >{{ $jour }}</td>
    @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
    @if($emploi->jour == $jour && $emploi->creneau_horaire == $heure)
    <td value="{{ $heure }}">{{ $emploi->id_module }}</td>
    @else
    <td value="{{ $heure }}"></td>
    @endif
    @endforeach
</tr>
@endforeach
@endforeach

</table>
