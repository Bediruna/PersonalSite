var i = 0;
var txt = 'WELCOME TO BEDIR.DEV';
var speed = 70;


$(function () {
    $("#nav-placeholder").load("nav.html");
});

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("titleText").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

// Change style of navbar on scroll
window.onscroll = function () {
    navDarken()
};

function navDarken() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

function navFunction() {
    var x = document.getElementById("smallNav");
    var navbar = document.getElementById("myNavbar");

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        navbar.className = "w3-bar" + " w3-card-2" + " w3-black";

    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
