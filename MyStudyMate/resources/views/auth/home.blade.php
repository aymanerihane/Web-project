

@vite(["resources/js/admin_ajax.js","resources/CSS/emplois.css"])

@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in as Responsable service Pedagogique!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contAllOp">

    <div class="conatinerAd">
            <div id="nav-bar">
                <input id="nav-toggle" type="checkbox"/>
                <div id="nav-header"><h1 id="nav-title">Menu</h1>
                    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                    <hr/>
                </div>
                <div id="nav-content">
                    <div class="nav-button btn1 active-side1 active-side"><span>Gestion des emplois du temps</span></div>
                    <div class="nav-button btn2"><span>Modification du role des professeurs</span></div>
                    <div class="nav-button btn3"><span>Affectation des Salle</span></div>
                    <hr class="hr"/>
                    <div class="nav-button btn3"><span>Inscrire d'une nouvelle classe dans un module</span></div>
                    <div class="nav-button btn5"><span>Ajouter et modifier le contenu d'une filière</span></div>

                <div id="nav-content-highlight"></div>
                <div id="nav-content-highlight2"></div>
            </div>
            <input id="nav-footer-toggle" type="checkbox"/>
        </div>


        <div class="center">
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
        </div>

    </div>
</div>

@endsection
