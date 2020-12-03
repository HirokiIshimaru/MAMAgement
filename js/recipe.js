const pageOn = document.querySelector('#on');

const page = document.getElementsByTagName("body");

const move = document.getElementsByTagName("footer");

console.log(move[0]);

pageOn.onclick = function () {
    page[0].style.overflow = "unset";
    move[0].style.bottom = "-30%";
}

const pageOff = document.getElementById("off");

pageOff.onclick = function () {
    page[0].style.overflow = "hidden";
    move[0].style.bottom = "0";
}