<?php 
if (empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['numordre']) || empty($_POST['special'])) {
	header("Location:inscriptionM.php?empty");
}else{
	if ($_POST["mdp"] != $_POST["cmdp"]) {
		header("Location:inscriptionM.php?mdp");
	}else{
		session_start();

		require("connexion.php");
		$tablogin = $bdd->query("SELECT * FROM medecin");
		$find = false;

		while ($tuple = $tablogin->fetch()) {
			if ($_POST["mail"] == $tuple["mail"]) {
				header("Location:inscriptionM.php?mailexiste");
				break;
			}elseif ($_POST["numordre"] == $tuple["numordre"]) {
				header("Location:inscriptionM.php?idexiste");
				break;
			}else{
				require("connexion.php");
				$bdd->exec("INSERT INTO medecinavantverif (nomM, prenomM, daten, numordre, specialite, adrss, numtel, horaire, mail, mdp) values ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["dn"]."','".$_POST["numordre"]."','".$_POST["special"]."','".$_POST["adr"]."','".$_POST["numtel"]."','".$_POST["horr"]."','".$_POST["mail"]."','".$_POST["mdp"]."')");

				header("Location:connexionM.php");
			}
		}
	}
}

?>