@vite(['resources/css/filiereDis.css'])
<h1 class="heading">Filieres:</h1>

        <div class="box-container">

          <div class="box" data-aos="flip-up">

            <div class="info">
              <h2>LST : Analytique de données</h2>

            </div>
          </div>
    <div class="contenufilier">
        <table>
            <tr id="header">
                <th onclick="toggleColumn(0)">Objectifs</th>
                <th onclick="toggleColumn(1)">Programme</th>
                <th onclick="toggleColumn(2)">Competence visée</th>
                <th onclick="toggleColumn(3)">Coordinateur</th>
            </tr>
            <tr class="table-row"></tr>
            <td>
                La Licence Science et Techniques en analytique des données permet aux étudiants de doter de compétences en matière d'outils informatiques, des techniques et des méthodes statistiques pour permettre d’organiser, de synthétiser et de traduire efficacement les données métier d’une organisation.
                L'étudiant doit être en mesure d'apporter un appui analytique à la conduite d'exploration et à l'analyse complexe de données.

            </td>
            <td>
                        <p>Semestre 5</p>

                            <ul>
                                <li>Mathématiques pour la science des données</li>
                                <li>Structures des données avancées et théorie des graphes</li>
                                <li>Fondamentaux des bases de données</li>
                                <li>Algorithmique avancée et programmationa</li>
                                <li>Développement WEB</li>
                                <li>Développement personnel et intelligence émotionnelle (Soft skills)</li>
                            </ul>



                        <p>Semestre 6</p>

                            <ul>
                                <li>Analyse et fouille de données</li>
                                <li>Systèmes et réseaux</li>
                                <li>Ingénierie des données</li>
                                <li>PFE</li>
                            </ul>



            </td>
            <td><ul>
                <li>Masters en sciences de données: fouille de données, business analytiques, blockchain,</li>
                <li> Masters orientés e-Technologies: e-Business, e-Administration et e-Logistique</li>
                <li>Formations d’Ingénieurs dans une école d’ingénieurs à l’issue de la deuxième ou de la troisième année de licence</li>
                <li>Data scientist</li>
                <li>Technicien supérieur en SGBD R : installation, configuration et administration des SGBD</li>
                <li>WebMaster et développeur de sites web dynamiques</li>
                <li>Intégration du monde du travail dans les entreprises et les bureaux d’études</li>
            </ul></td>
            <td> Coordinnateur : Pr.BAIDA Ouafae      :  wbaida@uae.ac.ma</td>
        </tr>
    </table>
</div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Masquer toutes les cellules de données sauf les en-têtes
                var dataCells = document.querySelectorAll('.contenufilier td');
                dataCells.forEach(function (cell) {
                    cell.classList.add('hidden');
                });
            });

            function toggleColumn(columnIndex) {
                var table = document.querySelector('.contenufilier table');
                var rows = table.querySelectorAll('.table-row');

                // Retirez la classe 'active' de toutes les cellules du header
                var headerCells = document.getElementById('header').querySelectorAll('th');
                headerCells.forEach(function (cell) {
                    cell.classList.remove('active');
                });

                // Ajoutez la classe 'active' à la cellule du header cliquée
                headerCells[columnIndex].classList.add('active');

                // Parcours chaque ligne et masque les cellules non désirées
                rows.forEach(function (row) {
                    var cells = row.children;
                    for (var i = 0; i < cells.length; i++) {
                        if (i === columnIndex) {
                            cells[i].classList.remove('hidden');
                        } else {
                            cells[i].classList.add('hidden');
                        }
                    }
                });
            }
        </script>
