var inp=document.getElementById("nom");
var sp=document.getElementById("validnom");
inp.addEventListener('focus',function () {
	sp.textContent = "Vous devez renseigner le champ Nom";
	sp.style.color = 'green';
});
inp.addEventListener('blur', function() {
	if (inp.value=="") {
		sp.textContent="Champ Nom requis";
		sp.style.color = 'red';
	} else {
		sp.textContent="";
		inp.value=inp.value.toUpperCase();
	}
});
var inpr=document.getElementById("prenom");
var sppr=document.getElementById("validprenom");
inpr.addEventListener('focus',function () {
	sppr.textContent = "Vous devez renseigner le champ Prenom";
	sppr.style.color = 'green';
});
inpr.addEventListener('blur', function() {
	if (inpr.value=="") {
		sppr.textContent="Champ Prenom requis";
		sppr.style.color = 'red';
	} else {
		sppr.textContent="";
		inpr.value=inpr.value.substring(0,1).toUpperCase() +
		 inpr.value.substring(1,inpr.value.length).toLowerCase();
	}
});
// validation d'email
var inpm = document.getElementById("mail");
var spm = document.getElementById("validmail");
inpm.addEventListener('input', function () {
	if (inpm.value.indexOf('@')!=-1) {
		spm.textContent="Format de l'email valide";
		spm.style.color="green"
	} else {
		spm.textContent="Format de l'email invalide";
		spm.style.color="red";
	}
});
// validation du mot de passe
var inmdp = document.getElementById("mdp");
var spmdp = document.getElementById("validmdp");
inmdp.addEventListener('input', function () {
	if (inmdp.value.length<=4) {
		spmdp.textContent="Faible";
		spmdp.style.color="red";
		inmdp.style.color = 'red';
	} else if  (inmdp.value.length>4 && inmdp.value.length<=8) {
		spmdp.textContent="Moyen";
		spmdp.style.color="orange";
		inmdp.style.color = 'orange';
 
	} else {
		spmdp.textContent="Fort";
		spmdp.style.color="green";
		inmdp.style.color = 'green';

	}
});
// validation nom user
var inuser = document.getElementById("nomu");
var spuser = document.getElementById("validuser");
inuser.addEventListener('focus',function () {
	spuser.textContent = "Vous devez renseigner le champ Nom d'utilisateur";
	spuser.style.color = 'green';
});
inuser.addEventListener('blur', function() {
	if (inuser.value=="") {
		spuser.textContent="Champ Nom Utilisateur requis";
		spuser.style.color = 'red';
	}
});

var submit = document.querySelector(".submit");

// submit.addEventListener('click', ()=>{
// 	// alert("Compte créé");
// });


var inpnid=document.getElementById("id");
var spid=document.getElementById("spid");
inpnid.addEventListener('focus',function () {
	spid.textContent = "Vous devez renseigner le champ Numero ID national";
	spid.style.color = 'green';
});
inpnid.addEventListener('blur', function() {
	if (inpnid.value=="") {
		spid.textContent="Champ Numero ID national requis";
		spid.style.color = 'red';
	}
});
