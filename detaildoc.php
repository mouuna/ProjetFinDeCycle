<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Medecin</title>
    <link rel="stylesheet" href="app/css/detaildocc.css">
</head>

<body>



    <header class="flex header">
        <a href="index.php" class="logo">MediCalendar</a>
        <div class="liens">
            <a href="listeM.php" class="dark">Medecins</a>

                <a href="connexionP.php" class="btn main-connexion">Se Connecter</a>
                <a href="inscriptionP.php" class="btn main-inscription">S'inscrire </a>
            
        </div>
    </header>

    <div class="card marg">
        <img src="images/illustration docteur.svg" alt="" class="card-img">
        <h3>Dr. <?php echo $_SESSION["nomM"]; ?> <?php echo $_SESSION["prenomM"]; ?></h3>

        <div class="sec-grid">
            <div class="flex infos">
                <p class="bold">Spécialité :</p>
                <p class="light"><?php echo $_SESSION["specialite"]; ?></p>
            </div>

            <div class="flex infos">
                <p class="bold">numero fixe :</p>
                <p class="light"><?php echo $_SESSION["numtel"]; ?></p>
            </div>

            <div class="flex infos">
                <p class="bold">adresse :</p>
                <p class="light"><?php echo $_SESSION["adrss"]; ?></p>
            </div>

            <div class="flex infos">
                <p class="bold">horraires d'ouverture :</p>
                <p class="light"><?php echo $_SESSION["horaire"]; ?></p>
            </div>

        </div>

        <a href="connexionp.php" class="btn prendre-rdv">Prendre RDV</a>
    </div>

</body>
<script type="text/javascript" src="app/js/detail.js"></script>
</html>