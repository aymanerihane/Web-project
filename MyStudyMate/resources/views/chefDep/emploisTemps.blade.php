<Label>Salles :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="sallesel" >
                            <option class="option" value="2" disabled selected></option>
                            @php
                            $prof=app('App\Http\Controllers\addEtudiant')->findprofe(auth()->user()->id);
                            $dep=app('App\Http\Controllers\Departements')->finddepprof($prof->MatriculeProf);
                           $salles = app('App\Http\Controllers\Locals')->getlocaldep($dep->id_departement);
                    @endphp
                    @if($salles->count() > 0)
                        @foreach ($salles as $salle)
                            <option class="option" value="{{ $salle->id_local }}">{{ $salle->nom }}</option>
                        @endforeach
                            </Select>
                            @endif
                        </Select>
                    </span>
                    <div class="signbox"  style="position: relative;margin-bottom:76px">
                        <form style="width:100%;" class="formSign" id="formres">
                            @csrf
                            <input type="hidden" id="sal" name="loc" required>
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
<div id="salle">

</div>
