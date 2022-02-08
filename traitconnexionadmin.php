<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM admin");
$find = false;
while ($tuple = $tablogin->fetch()) {
	if ($_POST["mail"] == $tuple["mail"] && $_POST["mdp"] == $tuple["mdp"]) {
		$find = true;
		break;
	}
}

if ($find == true) {
	header("Location:pageadm.php");
	$_SESSION["connected"] = true;
	$_SESSION["mail"] = $_POST["mail"];
	$_SESSION["id"] = $tuple["ida"];
	$_SESSION["noma"] = $tuple["noma"];

} else {
	header("Location:connexiona.php?incorrect");

	$_SESSION["connected"] = false;
}
?>