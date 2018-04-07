var items = 0; // Initial news to display
var itemsToDisplay = 6; // Items we will show every time we press Click On Me!
displayDivs(); // Let's startoooo KANSEI DORIFTO!

function displayDivs() {
    var i;
    var x = document.getElementsByClassName('new');

    if (items != x.length) {
        items += itemsToDisplay;
        
        for (i = 0; i < items; i++) {
            x[i].style.display = "block"; 
        }
    }
}
