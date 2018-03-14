var slideIndex = [1,1];
var sliders = ["team-slider", "matches-slider"];
var pagination = ["teams-pagination", "latest-matches-pagination"];
showDivs(1, 0, 0);
showDivs(1, 1, 1);

function changeDiv(n, slider, paginat) {
    showDivs(slideIndex[slider] = n, slider, paginat);
}

function showDivs(n, slider, paginat) {
    var i;
    var x = document.getElementsByClassName(sliders[slider]);
    var buttons = document.getElementById(pagination[paginat]).querySelectorAll(".page");

    x.className += "fadeaway";

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }

    for (i = 0; i < buttons.length; i++) {
        buttons[i].className = "page";  
    }  

    x[slideIndex[slider]-1].style.display = "block";
    buttons[slideIndex[slider]-1].className = "page active-button"
}