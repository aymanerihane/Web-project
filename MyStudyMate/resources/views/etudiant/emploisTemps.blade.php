<h1 class="h1">Emplois du temps</h1>
@php
    $emplois=app('App\Http\Controllers\emploisDuTemps')->etudemploi(app('App\Http\Controllers\addetudiant')->findetud()->id_Filiere);
@endphp
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
                            $m = app('App\Http\Controllers\modules')->getmodule($emploi->id_module);
                            $l = app('App\Http\Controllers\Locals')->getlocal($emploi->id_local);
                            break;
                        }
                    }
                @endphp
                @if($emploiFound)
                    <td value="{{ $heure }}">{{ $m->nom }} <br> {{ $emploi->activite }} <br> {{ $l->nom }}</td>
                @else
                    <td value="{{ $heure }}"></td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
