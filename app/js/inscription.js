var nom = document.querySelectorAll(".nomm");
var prenom = document.querySelectorAll(".prenomm");
var dn = document.querySelectorAll(".dn");
var no = document.querySelectorAll(".no");
var spe = document.querySelectorAll(".spe");
var adr = document.querySelectorAll(".adr");
var nt = document.querySelectorAll(".nt");
var hor = document.querySelectorAll(".hor");
var mail = document.querySelectorAll(".mail");
var mdp = document.querySelectorAll(".mdp");
var idm = document.querySelectorAll(".idm");

var nomto = document.querySelectorAll(".nomto");
var prenomto = document.querySelectorAll(".prenomto");
var dnto = document.querySelectorAll(".dnto");
var noto = document.querySelectorAll(".noto");
var speto = document.querySelectorAll(".speto");
var adrto = document.querySelectorAll(".adrto");
var ntto = document.querySelectorAll(".ntto");
var horto = document.querySelectorAll(".horto");
var mailto = document.querySelectorAll(".mailto");
var mdpto = document.querySelectorAll(".mdpto");
var idmto = document.querySelectorAll(".idmto");

for (var i = 0; i<=12; i++) {
	nomto[i].value = nom[i].innerHTML;
	prenomto[i].value = prenom[i].innerHTML;
	dnto[i].value = dn[i].innerHTML;
	noto[i].value = no[i].innerHTML;
	speto[i].value = spe[i].innerHTML;
	adrto[i].value = adr[i].innerHTML;
	ntto[i].value = nt[i].innerHTML;
	horto[i].value = hor[i].innerHTML;
	mailto[i].value = mail[i].innerHTML;
	mdpto[i].value = mdp[i].innerHTML;
	idmto[i].value	= idm[i].innerHTML;
}