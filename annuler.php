<?php 
echo '<meta charset="utf-8">';
require("connexion.php");
$bdd->exec("DELETE FROM rdv where idrdv = '".$_POST["idrdv"]."';");

header("Location:pagerdvp.php?annule");

?>