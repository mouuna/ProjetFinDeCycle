<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app/css/pagedocc.css">
    <link rel="stylesheet" href="app/css/prendrerdvs.css">
    <title>Prendre RDV</title>
</head>
<body>

    <?php 
    require("connexion.php");
    
    $tabmedecin = $bdd->query("SELECT *
        FROM rdv
        LEFT JOIN medecin ON ( rdv.idm = medecin.idm )
        WHERE
        jour
        BETWEEN (
        NOW( ) -1
        )
        AND (
        NOW( ) + INTERVAL 7
        DAY
        ) AND 
        rdv.idm = '".$_SESSION["idm"]."'
        ORDER BY jour ASC");
    // SELECT * FROM rdv left join medecin on(rdv.idm = medecin.idm) WHERE jour <= ( NOW() + INTERVAL 3 DAY ) and jour >= (NOW()) 
        ?>


        <header class="flex header">
            <a href="pagepat.php" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMp.php" class="dark">Medecins</a>
                <a href="pagerdvp.php" class="dark">Mes Rendez-vous</a>
                <a href="editp.php" class="dark"><?php echo $_SESSION["username"]; ?></a>
                <a href="connexionp.php" class="dark">Déconnexion</a>
            </div>
        </header>


        <div class="flex center">
            <img src="images/illustration docteur.svg" alt="" class="card-img">

        </div>

        <?php 
        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fullUrl, "pris") == true) {
            echo "<p class='red textc' style='color : red;'>Ce rendez-vous est deja pris!</p>";
        }
        if (strpos($fullUrl, "reserve") == true) {
            echo "<p class='red textc' style='color : green;'>Rendez-vous réservé avec succés!</p>";
        }
        if (strpos($fullUrl, "valide") == true) {
            echo "<p class='red textc' style='color : red;'>Veuillez choisir une date valide!</p>";
        }
        ?>

        



        <form action="traitrdv.php" method="POST">

            <p class="textc">Veuillez choisir une date qui n'est pas présente sur la liste précédente</p>

        


        <div class="flex center">
            <label for="date">Date RDV</label>
            <input type="date" name="dated" id="dated" class="inp dated">
        </div>

        <div class="flex center">
            <label for="heurerdv">Heure RDV</label>
            <input type="number" min="8" max="18" name="heurerdv" id="dated" class="inp heurerdv">
        </div>

    <p class="idm textc none"><?php echo $_SESSION["idm"] ?></p>
    <input type="text" name="idm" class="idmt none">


    <p class="idp textc none"><?php echo $_SESSION["id"] ?></p>
    <input type="text" name="idp" class="idpt none">

    <div class="flex center">
        <input type="submit" class="btn submit" value="Prendre">
    </div>

    <h3 class="textc">Liste de rdv réservés pour le Dr. <?php echo $_SESSION["nomM"]?> <?php echo $_SESSION["prenomM"]?> dans les 7 prochains jours</h3> 

         <?php 

         while ($tuple = $tabmedecin->fetch()) {
            echo '<div class="card">
            <div class="flex infos">
            <p class="bold">Nom Médecin :</p>
            <p class="light from">'.$tuple["nomM"].'</p>
            </div>
            <input type="text" name="nomM" class="to none">

            <div class="flex infos">
            <p class="bold">Jour :</p>
            <p class="light from">'.$tuple["jour"].'</p>
            </div>
            <input type="text" name="jour" class="to none"> 

            <div class="flex infos">
            <p class="bold">Heure :</p>
            <p class="light">'.$tuple["heure"].'h</p>
            </div>

            <input type="text" name="heure" class="to none">
            </div>
            
            ';
        }

        ?>
            

        

</form>

</body>

<script type="text/javascript" src="app/js/prendre.js"></script>
</html>