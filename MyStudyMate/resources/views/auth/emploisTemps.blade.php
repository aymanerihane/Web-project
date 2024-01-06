
            <table>
                <?php
                    $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
                    // $rdv["Dimanche"]["16:30"] = "Dermatologue";
                    // $rdv["Lundi"]["9"] = "Mémé -_-";
                    echo "<tr><th>Heure</th>";
                    for($x = 1; $x < 8; $x++)
                        echo "<th>".$jour[$x]."</th>";
                    echo "</tr>";
                    for($j = 0; $j < 24; $j += 0.5) {
                        echo "<tr>";
                        for($i = 0; $i < 7; $i++) {
                            if($i == 0) {
                                $heure = str_replace(".5", ":30", $j);
                                echo "<td class=\"time\">".$heure."</td>";
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


