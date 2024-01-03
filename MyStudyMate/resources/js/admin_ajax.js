// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {
    // Get all nav buttons and the highlight element
    const navButtons = document.querySelectorAll(".nav-button");
    const highlightElement = document.getElementById("nav-content-highlight2");

    // Function to handle the active state
    function handleActive(index) {
      navButtons.forEach((button, i) => {
        button.classList.remove(`active-side${i + 1}`);
      });

      navButtons[index].classList.add(`active-side${index + 1}`);
    }

    // Add event listeners to each nav button
    navButtons.forEach((button, index) => {
      button.addEventListener("click", () => handleActive(index));
    });
  });
