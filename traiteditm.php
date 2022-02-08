<?php 

if (empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['num']) || empty($_POST['adr'])) {
	header("Location:editm.php?empty");
}else{

	if ($_POST["mdp"] != $_POST["cmdp"]) {
		header("Location:editm.php?mdp");
	}else{

		session_start();
		require("connexion.php");
		$bdd->exec("UPDATE medecin
			SET nomM = '".$_POST["nom"]."', prenomM = '".$_POST["prenom"]."', daten = '".$_POST["dn"]."', adrss = '".$_POST["adr"]."', numtel = '".$_POST["num"]."', mail = '".$_POST["mail"]."', mdp = '".$_POST["mdp"]."' WHERE idM = '".$_SESSION["id"]."' ");

		header("Location:editm.php?edite");
	}
}
?>