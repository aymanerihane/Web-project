// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {

    // Check if the previous URL ends with "/choixMode"
    var referrer = document.referrer;
    var lastSegment = referrer.substr(referrer.lastIndexOf('/') + 1);

    if (lastSegment == "choixMode") {
        chnagerManupulation('annonce');
        var navButtons = document.querySelectorAll(".nav-button");
        navButtons.forEach((button, i) => {
            button.classList.remove(`active-side${i + 1}`);
            button.classList.remove(`active-side`);
          });
        navButtons[1].classList.add(`active-side2`);
        navButtons[1].classList.add(`active-side`);
    }else if(lastSegment == "chefDep/home"){
        if(window.location.pathname === "/choixMode"){
            console.log("m3elem");
        }
    }
    chnagerManupulation('emploisTemps');
    // Get all nav buttons and the highlight element
    var navButtons = document.querySelectorAll(".nav-button");
    var iconAdd = document.getElementById("addClick");
    var selectRole = document.getElementById("selectRole");
    var isdeleg = document.getElementById("isdeleg");
    var highlightElement = document.getElementById("nav-content-highlight2");

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
      }else if(navButtons[index].querySelector("span").textContent === "Ajouter Membres"){
        chnagerManupulation('addEtudiant');
        center.style.opacity = 0;




        document.addEventListener('change', ()=>{
            selectRole = document.getElementById("selectRole");
            isdeleg = document.getElementById("isdeleg");
            var value = selectRole.value;

            if(value == 5)
                isdeleg.style.display= 'block';
            else
                isdeleg.style.display= 'none';

        })
        // selectRole = document.getElementById("selectRole");
      }else if(navButtons[index].querySelector("span").textContent === "Gérer Annonces Département"){
        chnagerManupulation('annonce');
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
            chnagerManupulation('edit');
            center.style.opacity = 0;
        }

    })

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







