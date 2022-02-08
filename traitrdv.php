<?php 
if ($_POST[dated] < date("Y-m-d")) {
	header("Location:prendrerdv.php?valide");
}else{
	session_start();
require("connexion.php");

$tablogin = $bdd->query("SELECT *
	FROM rdv");
$find = false;

while ($tuple = $tablogin->fetch()) {
	if ($_POST["idm"] == $tuple["idm"] && $_POST["dated"] == $tuple["jour"] && $_POST["heurerdv"] == $tuple["heure"]) {
		$find=true;
		break;
	}
}

if ($find == true) {
	header("Location:prendrerdv.php?pris");
}else{

	$bdd->exec("INSERT INTO rdv( idm, idp, jour, heure)
		VALUES (
		'".$_POST["idm"]."', '".$_POST["idp"]."', '".$_POST["dated"]."','".$_POST["heurerdv"]."'

	)");

	$bdd->exec("delete from rdv where jour < curdate();");

	header("Location:prendrerdv.php?reserve");
}
}

?>