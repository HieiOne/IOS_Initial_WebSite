var slideIndex = 1;
showDivs(slideIndex);

function changeDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("team-slider");
    var buttons = document.getElementsByClassName("page");
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }

    for (i = 0; i < buttons.length; i++) {
        buttons[i].className = "page";  
    }  

    x[slideIndex-1].style.display = "block";
    buttons[slideIndex-1].className = "page active-button"
}