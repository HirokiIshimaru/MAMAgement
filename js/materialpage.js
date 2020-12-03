var material = document.getElementsByClassName("material");
for (var i = 0; i < material.length; i++) {
    material[i].onclick = function (e) {
        this.children[2].classList.toggle("on");
    }
}
var btnLmg = document.getElementsByClassName("btnLmg");
btnLmg[1].onclick = function () {
    btnLmg[0].classList.toggle("onbtnLmg");
    btnLmg[2].classList.toggle("onbtnLmg");
}