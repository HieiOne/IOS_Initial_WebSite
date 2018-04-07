try {
    var file = document.location.pathname.match(/[^\/]+$/)[0] //Name of the file
} 
catch (TypeError) { //In case It doesn't find the name of the file
    var file = 'index.php'
}

var buttons = document.getElementsByClassName("button");
for (let i = 0; i < buttons.length; i++) {
    var id = "button"+i;

        var button = document.getElementById(id).getAttribute("href");
    
        if (button == file) {
            document.getElementById(id).classList.add("active")
        }

}