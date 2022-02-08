<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link rel="stylesheet" href="app/css/pagedoc.css">
</head>

<body class="bod">

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(patient.idp = rdv.idp) where rdv.idm = '".$_SESSION["id"]."' ORDER BY jour asc");
    ?>

    <div class="grid-deux">
        <header class="flex header">
            <a href="pagedoc.php" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMm.php" class="dark">Medecins</a>
                <a href="#" class="dark">Mes Rendez-vous</a>
                <a href="editm.php" class="dark">DR. <?php echo $_SESSION["nomM"]." ".$_SESSION["prenomM"] ?></a>
                <a href="connexionM.php" class="dark">Déconnexion</a>
            </div>
        </header>


        <div class="text marg">
            <h2>Bienvenue, DR. <?php echo $_SESSION["nomM"]." ".$_SESSION["prenomM"] ?></h2>

            <h3>Vos rendez-vous :</h3>
            <div class="sec-grid">
                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "annule") == true) {
                    echo "<p class='red textc' style='color : green;'>rendez-vous annulé!</p>";
                }?>

                <?php 
                while ($tuple = $tabmedecin->fetch()) {
                    echo '
                    <div class="card">
                    <div class="left">
                        <div class="flex infos">
                            <p class="bold">Nom patient :</p>
                            <p class="light">'.$tuple["nom"].'</p>
                        </div>

                        

                        <div class="flex infos">
                            <p class="bold">Jour :</p>
                            <p class="light">'.$tuple["jour"].'</p>
                        </div>

                        <div class="flex infos">
                            <p class="bold">Heure :</p>
                            <p class="light">'.$tuple["heure"].'h</p>
                        </div>


                        <div class="flex infos">
                            <p class="bold" style="display: none;">id :</p>
                            <p class="light idrdv" style="display: none;">'.$tuple["idrdv"].'</p>
                        </div>
                    </div>
                    <div class="right">
                        <form action="annulerm.php" method="POST">

                            <input type="text" name="idrdv" class="idrdvt" style="display: none;">
                            <input type="submit" name="" value="Annuler" class="btn annuler">
                            
                        </form>
                    </div>
                </div>
                    ';
                }
                ?>

            </div>
        </div>

    </div>


</body>

<script type="text/javascript" src="app/js/annuler.js"></script>

</html>