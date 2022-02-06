<?php 
echo '<meta charset="utf-8">';
require("connexion.php");
$bdd->exec("INSERT INTO medecin (nomM, prenomM, daten, numordre, specialite, adrss, numtel, horaire, mail, mdp) values ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["dn"]."','".$_POST["numordre"]."','".$_POST["special"]."','".$_POST["adr"]."','".$_POST["numtel"]."','".$_POST["horr"]."','".$_POST["mail"]."','".$_POST["mdp"]."')");
$bdd->exec("DELETE FROM medecinavantverif WHERE idm = '".$_POST["idm"]."';");

header("Location:connexionM.php");
?>