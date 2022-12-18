var kotak = document.querySelector(".kotak");
var archonQ = document.querySelector("#ArchonQ");
var worldQ = document.querySelector(".WorldQ");
var storyQ = document.querySelector(".StoryQ");
var hangoutQ = document.querySelector(".HangoutQ");
var f1 = document.querySelector(".f1");
var f2 = document.querySelector(".f2");
var f3 = document.querySelector(".f3");
var f4 = document.querySelector(".f4");
var f5 = document.querySelector(".f5");
var f6 = document.querySelector(".f6");
var f7 = document.querySelector(".f7");
var r1 = document.querySelector(".r1");
var r2 = document.querySelector(".r2");
var r3 = document.querySelector(".r3");

archonQ.addEventListener("click", terpilih1);
worldQ.addEventListener("click", terpilih2);
storyQ.addEventListener("click", terpilih3);
hangoutQ.addEventListener("click", terpilih4);
f1.addEventListener("click", terpilih5);
f2.addEventListener("click", terpilih6);
f3.addEventListener("click", terpilih7);
f4.addEventListener("click", terpilih8);
f5.addEventListener("click", terpilih9);
f6.addEventListener("click", terpilih10);
f7.addEventListener("click", terpilih11);
r1.addEventListener("click", terpilih12);
r2.addEventListener("click", terpilih13);
r3.addEventListener("click", terpilih14);

function terpilih1() {
  archonQ.classList.toggle("kepilih");
}
function terpilih2() {
  worldQ.classList.toggle("kepilih");
}
function terpilih3() {
  storyQ.classList.toggle("kepilih");
}
function terpilih4() {
  hangoutQ.classList.toggle("kepilih");
}
function terpilih5() {
  f1.classList.toggle("kepilih");
}
function terpilih6() {
  f2.classList.toggle("kepilih");
}
function terpilih7() {
  f3.classList.toggle("kepilih");
}
function terpilih8() {
  f4.classList.toggle("kepilih");
}
function terpilih9() {
  f5.classList.toggle("kepilih");
}
function terpilih10() {
  f6.classList.toggle("kepilih");
}
function terpilih11() {
  f7.classList.toggle("kepilih");
}
function terpilih12() {
  r1.classList.toggle("kepilih");
}
function terpilih13() {
  r2.classList.toggle("kepilih");
}
function terpilih14() {
  r3.classList.toggle("kepilih");
}
