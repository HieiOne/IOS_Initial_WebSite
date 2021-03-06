console.log("HOL")
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

var slideIndex = 1;
var sliders = ['new', 'screenshot'];
var w = window.innerWidth;
var h = window.innerHeight;
var elements;
if (w < 600) { /** Phones */
    elements = 1;
}
else if (w <= 1026) { /** Tablets, 1024 doesn't work... wtf */
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
