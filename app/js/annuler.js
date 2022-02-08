var idrdv = document.querySelectorAll(".idrdv");
var idrdvt = document.querySelectorAll(".idrdvt");
var btn = document.querySelectorAll(".btn");

for (var i = 0; i < idrdv.length; i++) {
	idrdvt[i].value = idrdv[i].innerHTML;

// btn[i].addEventListener("click", function () {
// 	alert("RDV annulé!");
// });
}
