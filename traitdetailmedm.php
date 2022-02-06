<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM medecin");
$find = false;
while ($tuple = $tablogin->fetch()) {
	if ($_POST["id"] == $tuple["idm"]) {
		$find = true;
		break;
	}

}

	if ($find = true) {
		// echo $_POST["id"];
		header("Location:detaildocm.php");
		$_SESSION["connected"] = true;
		$_SESSION["specialite"] = $tuple["specialite"];
		$_SESSION["nomMed"] = $tuple["nomM"];
		$_SESSION["prenomMed"] = $tuple["prenomM"];
		$_SESSION["idmed"] = $tuple["idm"];
		// $_SESSION["idpat"] = $_POST["id"];

		$_SESSION["adrss"] = $tuple["adrss"];
		$_SESSION["horaire"] = $tuple["horaire"];
		$_SESSION["numtel"] = $tuple["numtel"];
	}else{
		echo "erreur";
	}
	
	

?>