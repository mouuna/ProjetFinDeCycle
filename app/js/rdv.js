var p = document.querySelectorAll(".from");
var inp = document.querySelectorAll(".to");

for (var i = 0; i<=p.length; i++) {
	inp[i].value = parseInt(p[i].innerHTML);
}
