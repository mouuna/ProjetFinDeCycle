<?php 

if (empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['id']) || empty($_POST['nomu'])) {
	header("Location:inscriptionP.php?empty");
}else{
	if ($_POST["mdp"] != $_POST["cmdp"]) {
		header("Location:inscriptionP.php?mdp");
	}else{
		session_start();

		require("connexion.php");
		$tablogin = $bdd->query("SELECT * FROM patient");
		$find = false;

		while ($tuple = $tablogin->fetch()) {
			if ($_POST["mail"] == $tuple["mail"]) {
				header("Location:inscriptionP.php?mailexiste");
				break;
			}elseif ($_POST["id"] == $tuple["numidnat"]) {
				header("Location:inscriptionP.php?idexiste");
				break;
			}else{
				require("connexion.php");
				$bdd->exec("INSERT INTO patient (nom, prenom, daten, adrss, numidnat, mail, username, mdp) values ('".$_POST["nom"]."', '".$_POST["prenom"]."','".$_POST["dn"]."','".$_POST["adr"]."','".$_POST["id"]."','".$_POST["mail"]."','".$_POST["nomu"]."','".$_POST["mdp"]."')");

				header("Location:connexionP.php");
			}
		}
	}
}
?>