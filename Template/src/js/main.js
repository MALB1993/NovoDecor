// Import our custom CSS
import '../scss/styles.scss'

// Import all of Bootstrap's JS
import 'bootstrap/dist/js/bootstrap.bundle';





document.getElementById("search-window").addEventListener("click", () => {

    document.getElementById('navbar-brand').classList.add("d-none");
    document.getElementById('account-button').classList.add("d-none");
    document.getElementById('search-window').classList.add("d-none");
    document.getElementById('search-box').classList.remove("d-none");
    document.getElementById('search-box').classList.add("d-block");
    document.getElementById('search-box').classList.add("m-4");
    document.getElementById('search-box').classList.remove("col-4");
    document.getElementById('search-box').classList.add("col-12");

});

document.getElementById("arrow-right").addEventListener("click", () => {
    document.getElementById('navbar-brand').classList.remove("d-none");
    document.getElementById('account-button').classList.remove("d-none");
    document.getElementById('search-window').classList.remove("d-none");
    document.getElementById('search-box').classList.add("d-none");
    document.getElementById('search-box').classList.remove("d-block");
    document.getElementById('search-box').classList.remove("m-4");
    document.getElementById('search-box').classList.add("col-4");

    document.getElementById('search-box').classList.remove("col-12");
});


const menuBar = document.getElementById("menu-bars");
const btnList = document.getElementById("btn-list");
const buttonClose = document.getElementById("btn-close");

// Check if elements exist
if (menuBar && btnList && buttonClose) {
    // Add the hidden class initially
    menuBar.classList.add("d-none");

    // Define the function to toggle menu visibility
    const toggleMenu = () => {
        menuBar.classList.toggle("d-none");
    }

    // Add click event listeners to the buttons
    btnList.addEventListener("click", toggleMenu);
    buttonClose.addEventListener("click", toggleMenu);
} else {
    console.error("One of the elements was not found.");
}
