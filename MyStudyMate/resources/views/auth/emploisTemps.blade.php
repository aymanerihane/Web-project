<Label>Filieres :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select"  style="margin-bottom: 15px;" id="filieresel" >
                            <option class="option" value="2" disabled selected></option>
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
                    <div class="signbox"  style="position: relative;margin-bottom:76px">
                        <form style="width:100%;" class="formSign" id="formemp">
                            @csrf
                            <div>
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
                                        </div>
                                    <div class="sb">
                                        <button type="button" id="submitemp">
                                            <div style="margin-bottom: 0" class="btnLogin"><span>ADD</span></div>
                                            </button>

                                    </div>
                            </div>
                        </form>
                    </div>
<h1 class="h1">Emplois du temps</h1>
<div id="emploi">

</div>
