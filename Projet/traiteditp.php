<?php 

if (empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['num']) || empty($_POST['adr'])) {
	header("Location:editp.php?empty");
}else{

	if ($_POST["mdp"] != $_POST["cmdp"]) {
		header("Location:editp.php?mdp");
	}else{

		session_start();
		require("connexion.php");
		$bdd->exec("UPDATE patient
			SET nom = '".$_POST["nom"]."', prenom = '".$_POST["prenom"]."', daten = '".$_POST["dn"]."', adrss = '".$_POST["adr"]."', mail = '".$_POST["mail"]."', mdp = '".$_POST["mdp"]."' WHERE idp = '".$_SESSION["id"]."' ");

		header("Location:editp.php?edite");
	}
}
?>