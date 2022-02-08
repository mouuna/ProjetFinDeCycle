<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCalendar</title>
    <link rel="stylesheet" href="app/css/pagedoc.css">
</head>

<body>

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(patient.idp = rdv.idp) WHERE rdv.jour = CURDATE() AND idm = '".$_SESSION["id"]."'");
    ?>

    <div class="fond-vert-light"><img src="images/background-light.svg" alt=""></div>

    <div class="grid">
        <header class="flex header">
            <a href="#" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMm.php" class="dark">Medecins</a>
                <a href="pagerdvm.php" class="dark">Mes Rendez-vous</a>
                <a href="editm.php" class="dark">DR. <?php echo $_SESSION["nomM"]." ".$_SESSION["prenomM"] ?></a>
                <a href="connexionM.php" class="dark">Déconnexion</a>
                
            </div>
        </header>
        <div class="image-de-fond"><img src="images/illustration page doc1.svg" alt=""></div>

        <div class="text marg">
            <h2>Bienvenue, Dr. <?php echo $_SESSION["nomM"]." ".$_SESSION["prenomM"] ?></h2>

            <h3>Activité du jour (vos Rendez-vous) :</h3>
            <div class="sec-grid">

                <?php 
                while ($tuple = $tabmedecin->fetch()) {
                    echo '<div class="card">
                    <div class="flex infos">
                    <p class="bold">Nom patient :</p>
                    <p class="light">'.$tuple["nom"].'</p>
                    </div>

                    <div class="flex infos">
                    <p class="bold">Heure :</p>
                    <p class="light">'.$tuple["heure"].'h</p>
                    </div>

                    
                    </div>';
                }
                ?>   

            </div>
        </div>

    </div>

</body>

</html>