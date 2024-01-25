// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {




    // Check if the previous URL ends with "/choixMode"
    var referrer = document.referrer;
    var added='';
    var lastSegment = referrer.substr(referrer.lastIndexOf('/') + 1);

    if (lastSegment == "chefDep") {
        chnagerManupulation('annonce');
        var navButtons = document.querySelectorAll(".nav-button");
        navButtons.forEach((button, i) => {
            button.classList.remove(`active-side${i + 1}`);
            button.classList.remove(`active-side`);
          });
        navButtons[1].classList.add(`active-side2`);
        navButtons[1].classList.add(`active-side`);
    }else if(lastSegment == "chefDep/home"){
        if(window.location.pathname === "/chefDep"){
        }
    }
    chnagerManupulation('emploisTemps');
    // Get all nav buttons and the highlight element
    var navButtons = document.querySelectorAll(".nav-button");
    var iconAdd = document.getElementById("addClick");
    var selectRole = document.getElementById("selectRole");
    var isdeleg = document.getElementById("isdeleg");
    var highlightElement = document.getElementById("nav-content-highlight2");
    var navtoggle = document.getElementById("nav-toggle");
    //   ajax part
function chnagerManupulation(url) {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const center = document.querySelector(".center");
            document.querySelector(".center").innerHTML = xhr.responseText;
            setTimeout(function () {
                center.style.opacity = 1; // Set opacity to 1 to fade in the content
            }, 30);
        }
    };
    xhr.open("GET", url, true); //erreur
    xhr.send();
}




    // Function to handle the active state
    function handleActive(index) {
      navButtons.forEach((button, i) => {
        button.classList.remove(`active-side${i + 1}`);
        button.classList.remove(`active-side`);
      });
      const center = document.querySelector(".center");
      navButtons[index].classList.add(`active-side${index + 1}`);
      navButtons[index].classList.add(`active-side`);
      if(navButtons[index].querySelector("span").textContent === "Affectation des Salle"){
        chnagerManupulation('affectationSalle');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Gestion des emplois du temps"){
        chnagerManupulation('emploisTemps');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Liste des Menbres"){
        chnagerManupulation('list');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Répondre Demandes Étudiants"){
        chnagerManupulation('repondreDemande');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Ajouter et modifier le contenu d'une filière"){
        chnagerManupulation('formationChoix');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Ajouter Membres"){
        chnagerManupulation('addEtudiant');
        center.style.opacity = 0;




        document.addEventListener('change', ()=>{

            selectRole = document.getElementById("selectRole");
            isdeleg = document.getElementById("isdeleg");
            isprof = document.getElementById("isprof");
            var value = selectRole.value;

            if(value == 3){
                isdeleg.style.display= 'block';
                isprof.style.display= 'none';
            }else if(value ==2){

                isprof.style.display= 'block';
                isdeleg.style.display= 'none';
            }else{
                isprof.style.display= 'none';
                isdeleg.style.display= 'none';
            }

        })
        // selectRole = document.getElementById("selectRole");
      }else if(navButtons[index].querySelector("span").textContent === "Gérer Annonces Département" || navButtons[index].querySelector("span").textContent === "Gérer Annonces Modules"){
        chnagerManupulation('annonce');
        fetchData();
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Annonces des Professeurs"){
        chnagerManupulation('annonceProf');
        center.style.opacity = 0;}
    }

    // Add event listeners to each nav button
    navButtons.forEach((button, index) => {
      button.addEventListener("click", () => handleActive(index));
    });
    document.addEventListener('click',(event)=>{
        if(event.target.classList.contains('addClick') ){
            chnagerManupulation('formAn');
            center.style.opacity = 0;
        }else if(event.target.classList.contains('edit')){
            chnagerManupulation('edit');
            editannonce(event.target);
            center.style.opacity = 0;
        }

    })
    // Function to make an AJAX request
    function fetchData() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/fetch-annonce', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response data and update the page
                var responseData = JSON.parse(xhr.responseText);
                updatePage(responseData.annonces);
            }
        };

        xhr.send();
    }

    // Function to update the page content
    function updatePage(annonces) {
        var container = document.querySelector('.listAnnonce');
        // Process and display the fetched data
        annonces.forEach(function (item) {

            container.innerHTML +='<div class="annonce-card">\
            <div id="delete" class="new">\
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="20" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by  @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path  fill="#fefefe" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>\
        </div>\
        <div class="posinew edit" data-id="'+item.id_annonce+'">\
            <svg class="icon edit" data-id="'+item.id_annonce+'" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fefefe" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>\
        </div>\
        <div class="containerAnnonceText">\
            <div class="imgholder">\
            </div>\
            <div class="containerAnnonceText">\
                <h1 class="head-card"">'+item.contenu+'</h1>\
                <h1 class="head-card""></h1>\
                <p class="text-card">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis consectetur ullam</p>\
                <p class="text-card"></p>\
            </div>\
        </div>\
        </div>\
        </div>';
        });
    }

    // Fetch data when the page loads
    fetchData();
  //edit data
 function editannonce(ele) {
      console.log("test");
        var id = ele.dataset.id;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/annonce/'+ id +'/edit', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response data and update the page
                var responseData = JSON.parse(xhr.responseText);
                console.log(responseData.annonce);
                edit(responseData.annonce);
            }
        };
            function edit(annonce){
                var container=document.getElementById('editAnnonce');
            container.innerHTML='<form style="flex: 1;justify-content: center;" class="formSign" method="POST" action="{{ route("annonces.update", '+annonce.id_annonce+')}}">\
            <input type="hidden" name="_token" value="{{ csrf_token() }}">\
            <input type="hidden" name="_method" value="PUT">\
            <div class="nom">\
                <input id="nom" type="text" name="title" required autofocus>\
                <label class="labelf">\
                    <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">E</span>\
                </label>\
            </div>\
            <input type="hidden" name="_token" value="{{ csrf_token() }}">\
            <div class="email">\
                <input type="text" name="resume"  required >\
                <label class="labelf">\
                    <span style="transition-delay:0ms">R</span><span style="transition-delay:50ms">E</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">U</span><span style="transition-delay:200ms">M</span><span style="transition-delay:250ms">E</span><span style="transition-delay:300ms">R</span>\
                </label>\
            </div>\
            <div class="email">\
                <input type="text" name="disc" required >\
                <label class="labelf">\
                    <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">C</span><span style="transition-delay:200ms">R</span><span style="transition-delay:250ms">I</span><span style="transition-delay:300ms">P</span><span style="transition-delay:350ms">T</span><span style="transition-delay:400ms">I</span><span style="transition-delay:450ms">O</span><span style="transition-delay:500ms">N</span>\
                </label>\
            </div>\
                <div class="zone">\
                    <div id="dropZ">\
                      <i class="fa fa-cloud-upload"></i>\
                      <div>Drag and drop your file here</div>\
                      <span>OR</span>\
                      <div class="selectFile">\
                        {{-- <label for="file">Select file</label> --}}\
                        <input type="file" name="files[]" id="fileInput" multiple>\
                      </div>\
                      <p>File size limit : 10 MB</p>\
                    </div>\
                  </div>\
            <div class="sb">\
                <button type="submit">\
                    <div style="margin-bottom: 0" class="btnLogin"><span>Submit</span></div>\
                  </button>\
            </div>\
            </div>\
        </form>';
        }
    xhr.send();
};
<<<<<<< Updated upstream
=======
  //edit data
  function editannonceProf(ele) {
    console.log("test");
      var id = ele.dataset.id;
      var xhr = new XMLHttpRequest();
      xhr.open('GET', '/annonce/'+ id +'/edit', true);
      xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
              // Handle the response data and update the page
              var responseData = JSON.parse(xhr.responseText);
              console.log(responseData.annonce);
              editProf(responseData.annonce);
          }
      };
          function editProf(annonce){
            console.log(annonce);
              var container=document.getElementById('editAnnonce');
              var desc=document.getElementById('disc');
              var resume=document.getElementById('resume');
              var title=document.getElementById('title');
              container.action='annonceProf/'+annonce.id_annonce+'';
              title.value=annonce.titre;
              resume.value=annonce.resume;
              desc.value=annonce.Description;
      }
  xhr.send();
};

>>>>>>> Stashed changes
  });


//   ajax part

function chnagerManupulation(url) {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const center = document.querySelector(".center");
            document.querySelector(".center").innerHTML = xhr.responseText;
            setTimeout(function () {
                center.style.opacity = 1; // Set opacity to 1 to fade in the content
            }, 30);
        }

    };



    xhr.open("GET", url, true); //erreur
    xhr.send();
}
<<<<<<< Updated upstream
=======


function chnagerManupulation1(url) {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const center = document.querySelector("#center");
            document.querySelector("#center").innerHTML = xhr.responseText;
            setTimeout(function () {
                center.style.opacity = 1; // Set opacity to 1 to fade in the content
            }, 30);
        }

    };



    xhr.open("GET", url, true); //erreur
    xhr.send();
}


>>>>>>> Stashed changes
