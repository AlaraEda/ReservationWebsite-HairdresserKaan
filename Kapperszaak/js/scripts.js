function Dames() {
    var x = document.getElementById("dames");
    var y = document.getElementById("heren");
    var a = document.getElementById("kinderen");
    var b = document.getElementById("kleuren");
    if (y.style.display === "none" || b.style.display || a.style.display === "none") {

        x.style.display = "block";
        y.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
    }
}
function Heren() {
    var x = document.getElementById("dames");
    var y = document.getElementById("heren");
    var a = document.getElementById("kinderen");
    var b = document.getElementById("kleuren");
    if (x.style.display === "none" || a.style.display || b.style.display === "none") {

        x.style.display = "none";
        y.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
    }
}

function Kinderen(){
    var x = document.getElementById("dames");
    var y = document.getElementById("heren");
    var a = document.getElementById("kinderen");
    var b = document.getElementById("kleuren");
    if (y.style.display === "none" || x.style.display || b.style.display === "none") {

        y.style.display = "none";
        x.style.display = "none";
        a.style.display = "block";
        b.style.display = "none";
    }
}

function Kleuren(){
    var x = document.getElementById("dames");
    var y = document.getElementById("heren");
    var a = document.getElementById("kinderen");
    var b = document.getElementById("kleuren");
    if (y.style.display === "none" || x.style.display || a.style.display === "none") {

        y.style.display = "none";
        x.style.display = "none";
        a.style.display = "none";
        b.style.display = "block";
    }
}