let loader = document.querySelector(".loader");

window.addEventListener('load', () => {
    window.setTimeout(hideLoader, 1000);
});

function hideLoader() {
    loader.style.display = 'none';
}
