var inp = document.getElementById("mdp");
var spn = document.getElementById("yeux");
var o = document.getElementById("oeil");
var os = document.getElementById("oeils");
spn.addEventListener('click',function () {
	if (inp.type == "password") {
		inp.type = "text"
		o.style.display = "none";
		os.style.display= "inline";
	} else {
		inp.type = "password";
		o.style.display = "inline";
		os.style.display= "none";
	} 
})