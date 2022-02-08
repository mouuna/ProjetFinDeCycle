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
    <link rel="stylesheet" href="app/css/detaildoc.css">
</head>

<body>



    <header class="flex header">
        <a href="pageadm.php" class="logo">MediCalendar</a>
        <div class="liens">
            <a href="listeMa.php" class="dark">Medecins</a>
            <!-- <a href="pagedem.php" class="dark">Demandes d'inscription</a> -->
            <a href="#" class="dark"><?php echo $_SESSION["noma"]; ?></a>
            <a href="connexiona.php" class="dark">Déconnexion</a>
            
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
    </div>

</body>
<script type="text/javascript" src="app/js/detail.js"></script>
</html>