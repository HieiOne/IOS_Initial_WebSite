var file = document.location.pathname.match(/[^\/]+$/)[0] //Name of the file
var buttons = document.getElementsByClassName("button");

for (let i = 0; i < buttons.length; i++) {
    var id = "button"+i
    var button = document.getElementById(id).getAttribute("href");
    if (button == file) {
        document.getElementById(id).classList.add("active")
    }
}