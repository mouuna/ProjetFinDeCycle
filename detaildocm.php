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
        <a href="pagedoc.php" class="logo">MediCalendar</a>
        <div class="liens">
            <a href="listeMm.php" class="dark">Medecins</a>
            <a href="pagerdvm.php" class="dark">Mes Rendez-vous</a>
            <a href="editm.php" class="dark">DR. <?php echo $_SESSION["nomM"] ; ?> <?php echo $_SESSION["prenomM"] ; ?></a>
            <a href="connexionp.php" class="dark">Déconnexion</a>
            
        </div>
    </header>

    <div class="card marg">
        <img src="images/illustration docteur.svg" alt="" class="card-img">
        <h3>Dr. <?php echo $_SESSION["nomMed"]; ?> <?php echo $_SESSION["prenomMed"]; ?></h3>

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

        <p class="nomf none"><?php echo $_SESSION["nomMed"] ?></p>
        <p class="prenomf none"><?php echo $_SESSION["prenomMed"] ?></p>
        <p class="id none"><?php echo $_SESSION["idmed"] ?></p>
        
    </div>

</body>
<script type="text/javascript" src="app/js/detail.js"></script>
</html>