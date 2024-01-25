@vite(['resources/css/filiereDis.css'])

<h1 class="heading">Filieres:</h1>

        <div class="box-container">

          <div class="box" data-aos="flip-up">

            <div class="info">
              <h2>LST : Ingénierie de développement d’applications informatiques </h2>

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

            <tr class="table-row">
                <td>
                    La Licence Science et Technique permet en Ingénierie de développement d’applications informatiques aux étudiants :
                    <ul>
                        <li>d'avoir une culture de base scientifique,</li>
                        <li>d’acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique : algorithmique, programmation, bases de données, systèmes d’exploitations et réseaux.</li>
                        <li>de développer un savoir-faire technique en informatique : technologie objet, informatique distribuée, architectures client-serveur et n-tiers, applications hétérogènes...</li>
                        <li>d’améliorer leur niveau d’anglais</li>
                        <li>d’avoir une culture d’entreprise suffisante pour se faire une idée concrète sur le monde du travail.</li>
                    </ul>
                </td>
                <td>


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
                <td>Technicien supérieur en développement d’application en C++ et JAVA
                    Technicien supérieur en réseaux locaux : installation, configuration et administration des réseaux locaux
                    Technicien supérieur en SGBD R : installation, configuration et administration des SGBD
                    WebMaster et développeur de sites web dynamiques
                    Poursuivre des études supérieures en Informatique</td>
                <td>Coordinnateur : Pr.KOUNAIDI Mohamed :               m.kounaidi@@uae.ac.ma</td>
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
