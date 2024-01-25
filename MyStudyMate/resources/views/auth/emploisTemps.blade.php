<Label>Filieres :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="filieresel" >
                            <option class="option" value="" disabled selected></option>
                            @php
                    $filieres = app('App\Http\Controllers\filieres')->showFilieres();
                    @endphp
                    @if($filieres->count() > 0)
                        @foreach ($filieres as $filiere)
                            <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}</option>
                        @endforeach
                            </Select>
                            @endif
                        </Select>
                    </span>
<div class="signbox" id="efrom" style="position: relative;margin-bottom:76px">
    <form style="width:100%;" class="formSign" method="POST" action="addEmploi">
        <input type="hidden" id="fil" name="filiere">
            <div style="display: flex;flex-direction:column;justify-content: space-between;align-items: center;">
                    <Label>Jour:</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" name="jour" style="margin-bottom: 15px;">
                            <option class="option" value="" disabled selected>Jour</option>
                            @foreach(['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI','SAMEDI'] as $jour)
                            <option value="{{ $jour }}">{{ $jour }}</option>
                            @endforeach
                        </Select>
                    </span>
                    <Label>Creneau :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" name="heure" style="margin-bottom: 15px;">
                            <option value="0">Heure</option>
                            @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
                            <option value="{{ $heure }}">{{ $heure }}</option>
                            @endforeach
                        </Select>
                    </span>
                    <Label>Local :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" name="local" style="margin-bottom: 15px;">
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
                        <Select class="select" name="act" style="margin-bottom: 15px;">
                            <option value="0"></option>
                            @foreach(['Cours', 'TD', 'TP'] as $act)
                            <option value="{{ $act }}">{{ $act }}</option>
                            @endforeach
                        </Select>
                    </span>
                    <Label>Module :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" name="module" style="margin-bottom: 15px;">
                            <option value="0"></option>
                            @php
                            $modules = app('App\Http\Controllers\modules')->select(1);
                            @endphp
                            @foreach($modules as $module)
                            <option value="{{ $module->id_module }}">{{ $module->nom }}</option>
                            @endforeach
                        </Select>
                    </span>
                <div class="sb">
                    <button type="submit">
                        <div style="margin-bottom: 0" class="btnLogin"><span>ADD</span></div>
                        </button>

                </div>
        </div>
    </form>
</div>
<h1 class="h1">Emplois du temps</h1>
<div id="emploi">

</div>
