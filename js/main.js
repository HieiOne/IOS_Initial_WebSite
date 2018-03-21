var slideIndex = 1;
var w = window.innerWidth;
var h = window.innerHeight;
var elements;
if (w < 600) { /** Phones */
    elements = 1;
}
else if (w < 780) { /** Tablets */
    elements = 3;
}
else {
    elements = 4;
}
// var elements = 4; /* To make it responsive later */
showDivs(slideIndex);

function plusDivs(n) {
    if (n == 1) {
        showDivs(slideIndex += n-1+elements);
    }
    else {
        showDivs(slideIndex -= elements);
    }
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("new");
    
    
    if (n > x.length) {
        slideIndex = 1;
    };
    
    if (n < 1) {
        var rows = Math.ceil(x.length/elements);
        slideIndex = elements*rows-elements+1;
    };
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }

    for (i = 0; i < elements; i++) {
        x[slideIndex-1+i].style.display = "block";
    };

}   