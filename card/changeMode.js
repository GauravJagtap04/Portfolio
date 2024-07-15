let invert = document.getElementsByName("invert");
let main = document.getElementById("main");

function changeMode() {
    main.style.backgroundImage = "url(background2.png)";
    invert.style.filter = "none";
}
