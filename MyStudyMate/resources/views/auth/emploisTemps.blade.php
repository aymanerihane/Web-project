
<<<<<<< Updated upstream
<table>
    <?php
=======
<Label>Filieres :</Label><br>
                    <span class="custom-dropdown small" >
                        <Select class="select" name="jour" style="margin-bottom: 15px;" id="filieresel" >
                            <option class="option" value="" disabled selected></option>
                            @php
                    $filieres = app('App\Http\Controllers\filieres')->showFilieres();
                    @endphp
                    @if($filieres->count() > 0)
                        @foreach ($filieres as $filiere)
                            <option class="option" value="{{ $filiere->id_filiere }}">{{ $filiere->nom }}@php
                                $emplois=app('App\Http\Controllers\emploisDuTemps')->select($filiere->id_filiere);
                            @endphp</option>
                        @endforeach
                            </Select>
                            @endif
                        </Select>
                    </span>
<div class="signbox" style="position: relative;margin-bottom:76px">

    <form style="width:100%;" class="formSign" method="POST" action="">
            <div style="display: flex;flex-direction:column;justify-content: space-between;align-items: center;">

                <div class="email">
                    <input id="titleEmplois" type="text" name="titleEmplois" required >
                    <label class="labelf">
                        <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">E</span>

                </div>
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

                <div class="sb">
                    <button type="submit">
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
        @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
        <th>{{ $heure }}</th>
        @endforeach
    </tr>
    @php
    if(isset($_GET['filieresel'])){
    $id=$_GET['filieresel'];
    $emplois=app('App\Http\Controllers\emploisDuTemps')->select($id);
    }
    @endphp
    {{-- @if ($_GET['filieresel']==0)

    @else --}}
    @foreach ($emplois as $emploi )
    @foreach(['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI','SAMEDI'] as $jour)
    <tr value="{{ $jour }}">
        <td >{{ $jour }}</td>
        @foreach(['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45'] as $heure)
        @if($emploi->jour == $jour && $emploi->jour == $heure)
        <td value="{{ $heure }}">{{ $emploi->jour }}</td>
        @else
        <td value="{{ $heure }}"></td>
        @endif
        @endforeach
    </tr>
    @endforeach
   @endforeach
   {{-- @endif --}}
    {{-- <?php
>>>>>>> Stashed changes
        $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
        // $rdv["Dimanche"]["16:30"] = "Dermatologue";
        // $rdv["Lundi"]["9"] = "Mémé -_-";
        echo "<tr><th>Heure</th>";
        for($x = 1; $x < 8; $x++)
            echo "<th>".$jour[$x]."</th>";
        echo "</tr>";
        for($j = 9; $j < 19; $j += 0.75) {
            echo "<tr>";
            for($i = 0; $i < 7; $i++) {
                if($i == 0) {
                    $heure = str_replace(".75", ":45", $j);
                    $heure = str_replace(".5", ":30", $j);echo "<td class=\"time\">".$heure."</td>";
                }
                echo "<td>";
                if(isset($rdv[$jour[$i+1]][$heure])) {
                    echo $rdv[$jour[$i+1]][$heure];
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    chargerCategories();

    function chargerCategories() {
        fetch("emploisTemps.blade.php")
            .then(response => response.text())
            .then(rep => {;
                document.getElementById("filieresel").addEventListener('change', function() {
                    conole.log(this.value);
                    chargerProduits(this.value);
                });
            })
            .catch(error => console.error('Error loading categories:', error));
    }

    function chargerProduits(val) {
        fetch("emploisTemps.blade.php?filiere=" + val)
    }
});
</script>

