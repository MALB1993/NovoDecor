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