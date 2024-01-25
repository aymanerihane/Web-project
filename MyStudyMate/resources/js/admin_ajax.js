// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {




    // Check if the previous URL ends with "/choixMode"
    var referrer = document.referrer;
    var added='';
    var lastSegment = referrer.substr(referrer.lastIndexOf('/') + 1);

    if (lastSegment == "chefDep") {
        chnagerManupulation('chefDep/annonce');
        fetchData();
        var navButtons = document.querySelectorAll(".nav-button");
        navButtons.forEach((button, i) => {
            button.classList.remove(`active-side${i + 1}`);
            button.classList.remove(`active-side`);
          });
        navButtons[1].classList.add(`active-side2`);
        navButtons[1].classList.add(`active-side`);
    }
    chnagerManupulation('emploisTemps');
    chnagerManupulation('annonce');
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

        var select=document.getElementById("memberType");
        console.log(select)
        document.addEventListener('change', ()=>{
            select = document.getElementById("memberType");
            if (select.value == 0) {
                chnagerManupulation1('allMembers');
            } else if (select.value == 1) {
                chnagerManupulation1('etudMember');
            } else if (select.value == 2) {
                chnagerManupulation1('profMember');
            }
        });
      }else if(navButtons[index].querySelector("span").textContent === "Répondre Demandes Étudiants"){
        chnagerManupulation('repondreDemande');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Ajouter et modifier le contenu d'une filière"){
        chnagerManupulation('formationChoix');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Ajouter Membres"){
        chnagerManupulation('addEtudiant');
        center.style.opacity = 0;



        var isprof,isdeleg,value;
        document.addEventListener('change', ()=>{

            selectRole = document.getElementById("selectRole");
            isdeleg = document.getElementById("isdeleg");
            isprof = document.getElementById("isprof");
            value = selectRole.value;

            if(value == 3){
                isdeleg.style.display= 'flex';
                isprof.style.display= 'none';
            }else if(value ==2){

                isprof.style.display= 'flex';
                isdeleg.style.display= 'none';
            }else{
                isprof.style.display= 'none';
                isdeleg.style.display= 'none';
            }

        })
        // selectRole = document.getElementById("selectRole");
      }else if(navButtons[index].querySelector("span").textContent === "Gérer Annonces Département"){
        chnagerManupulation('chefDep/annonce');
        fetchData();
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Gérer Annonces Modules"){
        chnagerManupulation('annonce');
        center.style.opacity = 0;
      }else if(navButtons[index].querySelector("span").textContent === "Annonces des Professeurs"){
        chnagerManupulation('annonceProf');
        center.style.opacity = 0;
      }
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
            referrer = window.location.pathname;
            added='';
            lastSegment = referrer.substr(referrer.lastIndexOf('/') + 1);
            if (lastSegment == "chefDep"){
                console.log("asasd222")
                chnagerManupulation('edit');
                editannonce(event.target);
            }else if (lastSegment == "home"){
            chnagerManupulation('edit');
            editannonceProf(event.target);
            }

            center.style.opacity = 0;
        }else if(event.target.classList.contains('delete')){
            deleteAnnonces(event.target);
            chnagerManupulation('annonce');
            fetchData();
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
        console.log(annonces);
        // Process and display the fetched data
        annonces.forEach(function (item) {

            container.innerHTML +='<div class="annonce-card">\
            <div id="delete" data-id="'+item.id_annonce+'" class="new delete">\
            <svg class="icon delete" data-id="'+item.id_annonce+'" xmlns="http://www.w3.org/2000/svg" height="20" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by  @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path  fill="#fefefe" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>\
            </div>\
        <div class="posinew edit" data-id="'+item.id_annonce+'">\
            <svg class="icon edit" data-id="'+item.id_annonce+'" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fefefe" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>\
        </div>\
        <div class="containerAnnonceText">\
            <div class="imgholder">\
            </div>\
            <div class="containerAnnonceText" style="width: 100%;">\
                <h1 class="head-card">'+item.titre+'</h1>\
                <p class="text-card" style="width: 100%;"">'+item.resume+'</p>\
            </div>\
        </div>\
        </div>\
        </div>';
        });
    }
    // Fetch data when the page loads
    // fetchData();

    //delete data
    function deleteAnnonces(ele){
        var id = ele.dataset.id;
        fetch('/annonce/' + id, {
            method: 'GET',
        })
    }
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
                var desc=document.getElementById('disc');
                var resume=document.getElementById('resume');
                var title=document.getElementById('title');
                container.action='annonce/'+annonce.id_annonce+'';
                title.value=annonce.titre;
                resume.value=annonce.resume;
                desc.value=annonce.Description;
        }
    xhr.send();
};
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
chargerCategories();

    function chargerCategories() {
        var tmp;
        fetch("emploisTemps")
            .then(response => response.text())
            .then(rep => {
                document.getElementById("filieresel").addEventListener('change', function() {
                    var fil=document.getElementById("fil");
                    fil.value=this.value;
                        tmp=document.getElementById("efrom");
                        console.log(tmp);
                        tmp.innerHTML='<Label>Module :</Label><br>\
                        <span class="custom-dropdown small" >\
                        <Select class="select" name="module" style="margin-bottom: 15px;">\
                        <option value="0"></option>\
                        @php\
                        $modules = app("App\Http\Controllers\modules")->select('+this.value+');\
                        @endphp\
                        @foreach($modules as $module)\
                        <option value="{{ $module->id_module }}">{{ $module->nom }}</option>\
                        @endforeach\
                        </Select>\
                        </span>';
                        chargerProduits(this.value);
                    });
            })
            .catch(error => console.error('Error loading categories:', error));
    }

    function chargerProduits(val) {
        fetch("emploi?filiere=" + val)
        .then(response => response.text())
            .then(rep => {
                document.getElementById("emploi").innerHTML = rep;
            })
    }

    // document.addEventListener('change', ()=>{
    //     var id=document.getElementById('filieresel')
    //     });
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
