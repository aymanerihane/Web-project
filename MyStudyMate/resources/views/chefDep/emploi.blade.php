@php
if(isset($_GET['salle'])){
$id=$_GET['salle'];
$emplois=app('App\Http\Controllers\reservations')->select($id);
}
@endphp
<input type="hidden" id="sl" value="{{$id}}">
<table>
    <tr>
        <th></th>
        @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45', '15h00 - 16h45', '17h00 - 18h45'] as $heure)
            <th>{{ $heure }}</th>
        @endforeach
    </tr>
    @foreach(['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI', 'SAMEDI'] as $jour)
        <tr value="{{ $jour }}">
            <td>{{ $jour }}</td>
            @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45', '15h00 - 16h45', '17h00 - 18h45'] as $heure)
                @php
                    $emploiFound = false;
                    $m = null;
                    $l = null;
                    foreach ($emplois as $emploi) {
                        if ($emploi->jour == $jour && $emploi->creneau_horaire == $heure) {
                            $emploiFound = true;
                            $l = app('App\Http\Controllers\Locals')->getlocal($emploi->id_local);
                            break;
                        }
                    }
                @endphp
                @if($emploiFound)
                    <td data-id="{{ $emploi->id_reservation }}" class="supreser">Reserve</td>
                @else
                    <td value=""></td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
