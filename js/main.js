var modal = document.getElementById('myModal'); /** For the image zoom */
var modalImg = document.getElementById("img01");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
modal.onclick = function() { 
    modal.style.display = "none";
}

function ShowModal(image) {
    modal.style.display = "block";
    modalImg.src = image;
}

var slideIndex = 1;
var sliders = ['new', 'screenshot'];
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

showDivs(slideIndex,0); /** Initiation of news */
showDivs(slideIndex,1); /** Initiation of screenshots */

function plusDivs(n,slider) {
    if (n == 1) {
        showDivs(slideIndex += n-1+elements, slider);
    }
    else {
        showDivs(slideIndex -= elements, slider);
    }
}

function showDivs(n,slider) {
    var i;
    var x = document.getElementsByClassName(sliders[slider]);
    
    
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