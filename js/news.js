var dropdown = document.getElementsByClassName("dropdown-content")[0];
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (event.target.matches('.dropbtn') && dropdown.style.display != "block") {
        dropdown.style.display = "block";
    }
    else {
        dropdown.style.display = "none";
    }
}