@vite(['resources/css/filiereDis.css','resources/js/ffili.js'])

@php
    if(isset($_GET['idFiliere'])){
        $idFiliere = $_GET['idFiliere'];
        $filieres = app('App\Http\Controllers\filieres')->findfil($idFiliere);
    }
@endphp
<h1 class="heading" style="margin: 0;font-size:1rem">Filieres:</h1>

        <div class="box-container" style="width: 100%;display: flex;flex-direction: column;align-items:center">

          <div class="box" data-aos="flip-up" style="position: relative;width:100%">

            <div class="info">
              <h2>{{$filieres->nom}}</h2>

            </div>
          </div>
    <div class="contenufilier">
        <table class="table" style="position: absolute;width: 100%;text-align:center">
            <tr id="header tr">
                <th class="th th1">Objectifs</th>
                <th class="th th2">Programme</th>
                <th class="th th3">Competence visée</th>
                <th class="th th4">Coordinateur</th>
            </tr>

            <tr class="table-row tr">
                <td class="td" colspan="4">
                    La Licence Science et Technique permet en Ingénierie de développement d’applications informatiques aux étudiants :
                    <ul>
                        <li>d'avoir une culture de base scientifique,</li>
                        <li>d’acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique : algorithmique, programmation, bases de données, systèmes d’exploitations et réseaux.</li>
                        <li>de développer un savoir-faire technique en informatique : technologie objet, informatique distribuée, architectures client-serveur et n-tiers, applications hétérogènes...</li>
                        <li>d’améliorer leur niveau d’anglais</li>
                        <li>d’avoir une culture d’entreprise suffisante pour se faire une idée concrète sur le monde du travail.</li>
                    </ul>
                </td>
                <td class="td" colspan="4" style="display: none">


                            <p>Semestre 5</p>

                                <ul>
                                    <li>Modélisations avancée et Méthodes de génie logiciel</li>
                                    <li>Développement Web</li>
                                    <li>Base de données Structurées et non Structurées</li>
                                    <li>Programmation Orientée Objet en C++/Java</li>
                                    <li>Systèmes et réseaux informatiques</li>
                                    <li>Développement de soft skills</li>
                                </ul>



                            <p>Semestre 6</p>

                                <ul>
                                    <li>Entreprendre et s’initier à la Gestion d'une Entreprise avec un ERP</li>
                                    <li>Initiation en développement mobile et Edge Computing</li>
                                    <li>Développement web avancé Back end (Python)</li>
                                    <li>PFE</li>
                                </ul>



                </td>
                <td class="td" colspan="4" style="display: none">Technicien supérieur en développement d’application en C++ et JAVA
                    Technicien supérieur en réseaux locaux : installation, configuration et administration des réseaux locaux
                    Technicien supérieur en SGBD R : installation, configuration et administration des SGBD
                    WebMaster et développeur de sites web dynamiques
                    Poursuivre des études supérieures en Informatique</td>
                <td class="td" colspan="4" style="display: none">Coordinnateur : Pr.KOUNAIDI Mohamed :               m.kounaidi@@uae.ac.ma</td>
            </tr>
        </table>
    </div>

    </div>





