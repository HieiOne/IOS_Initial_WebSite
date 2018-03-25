var file = document.location.pathname.match(/[A-za-z]+(?=.)/)[0] //Name of the file

if (file = 'news') {
    console.log("OHLA");
}