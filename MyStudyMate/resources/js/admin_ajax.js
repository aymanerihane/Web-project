function isdelegue(ele){
    console.log(ele.value);
    if(ele.value=="5"){[

    ]}
}
// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {
    // Get all nav buttons and the highlight element
    const navButtons = document.querySelectorAll(".nav-button");
    const highlightElement = document.getElementById("nav-content-highlight2");

    // Function to handle the active state
    function handleActive(index) {
      navButtons.forEach((button, i) => {
        button.classList.remove(`active-side${i + 1}`);
        button.classList.remove(`active-side`);
      });

      navButtons[index].classList.add(`active-side${index + 1}`);
      navButtons[index].classList.add(`active-side`);
      if(navButtons[index].querySelector("span").textContent === "Affectation des Salle"){
        chnagerManupulation();
      }
    }

    // Add event listeners to each nav button
    navButtons.forEach((button, index) => {
      button.addEventListener("click", () => handleActive(index));
    });
  });

//   ajax part

function chnagerManupulation() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.querySelector(".center").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "{{ asset('resources/views/auth/affectationSalle.blade.php') }}", true); //erreur
    xhr.send();
}

