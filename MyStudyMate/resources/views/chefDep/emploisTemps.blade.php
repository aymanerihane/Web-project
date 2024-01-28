
                    <div class="signbox"  style="position: relative;margin-bottom:76px">
                        <form style="width:100%;" class="formSign" id="formemp">
                            @csrf
                            <input type="hidden" id="fil" name="filiere" required>
                                <div style="display: flex;flex-direction:column;justify-content: space-between;align-items: center;">
                                        <Label>Jour:</Label><br>
                                        <span class="custom-dropdown small" >
                                            <Select class="select" name="jour" style="margin-bottom: 15px;" required>
                                                <option class="option" value="" disabled selected>Jour</option>
                                                @foreach(['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI','SAMEDI'] as $jour)
                                                <option value="{{ $jour }}">{{ $jour }}</option>
                                                @endforeach
                                            </Select>
                                        </span>
                                        @csrf
                                        <Label>Creneau :</Label><br>
                                        <span class="custom-dropdown small" >
                                            <Select class="select" name="heure" style="margin-bottom: 15px;" required>
                                                <option value="0">Heure</option>
                                                @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
                                                <option value="{{ $heure }}">{{ $heure }}</option>
                                                @endforeach
                                            </Select>
                                        </span>
                                        <Label>Local :</Label><br>
                                        <span class="custom-dropdown small" >
                                            <Select class="select" name="local" style="margin-bottom: 15px;" required>
                                                <option value="0">Salle</option>
                                                @php
                                        $salles = app('App\Http\Controllers\Locals')->showlocals();
                                        @endphp
                                                @foreach($salles as $salle)
                                                <option value="{{ $salle->id_local }}">{{ $salle->nom }}</option>
                                                @endforeach
                                            </Select>
                                        </span>
                                        <Label>Activite :</Label><br>
                                        <span class="custom-dropdown small" >
                                            <Select class="select" name="act" style="margin-bottom: 15px;" required>
                                                <option value="0"></option>
                                                @foreach(['Cours', 'TD', 'TP'] as $act)
                                                <option value="{{ $act }}">{{ $act }}</option>
                                                @endforeach
                                            </Select>
                                        </span>
                                        <div id="efrom"> </div>

                                    <div class="sb">
                                        <button type="button" id="submitemp">
                                            <div style="margin-bottom: 0" class="btnLogin"><span>ADD</span></div>
                                            </button>

                                    </div>
                            </div>
                        </form>
                    </div>
<h1 class="h1">Emplois du temps</h1>
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
                    <td data-id="{{ $emploi->id_emploi }}" class="supemp">{{ $m->nom }} <br> {{ $emploi->activite }} <br> {{ $l->nom }}</td>
                @else
                    <td value=""></td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
