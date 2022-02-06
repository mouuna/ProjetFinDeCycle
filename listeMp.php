<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste médecins</title>
    <link rel="stylesheet" href="app/css/listee.css">
</head>

<body>

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin");
    
    ?>

    <div class="grid">
        <header class="flex header">
            <a href="pagepat.php" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="#" class="dark">Medecins</a>
                <a href="pagerdvp.php" class="dark">Mes Rendez-vous</a>
                <a href="editp.php" class="dark"><?php echo $_SESSION["username"]; ?></a>
                <a href="connexionp.php" class="dark">Déconnexion</a>
            </div>
        </header>

        <div class="recherche flex">
            <h2 class="dark">Liste des médecins :</h2>
            <form action="trouvdocp.php" method="POST" class="flex espace">
                <input type="text" class="inp specialite" placeholder="Nom du médecin" name="nomM">
                <input type="text" class="inp specialite" placeholder="Spécialité" name="special">
                <input type="submit" class="btn rechercher" value="Rechercher">
            </form>
        </div>

        <div class="sec-grid marg">
            <?php 
            while ($tuple = $tabmedecin->fetch()) {

                echo '
                <div class="card">
                <img src="images/illustration docteur.svg" alt="" class="card-img">
                <h3>Dr. '.$tuple["nomM"].''.' '.''.$tuple["prenomM"].'</h3>
                <div class="flex infos">
                <p class="bold">Spécialité :</p>
                <p class="light">'.$tuple["specialite"].'</p>
                </div>

                <div class="flex infos">
                <p class="bold">numero fixe :</p>
                <p class="light">'.$tuple["numtel"].'</p>
                </div>

                <div class="flex infos">
                <p class="bold">adresse :</p>
                <p class="light">'.$tuple["adrss"].'</p>
                </div>

                <p class="none from">'.$tuple["idm"].'</p>

                <form action="traitdetailmedp.php" method="POST">
                <input class="none to" type="text" name="id">


                <input type="submit" name="detaildoc" value="Détails" class="btn rechercher">
                </form>

                </div>

                ';
            }
            ?>

            <p class="idp none"><?php echo $_SESSION["id"] ?></p>
            <input type="text" name="idp" class="idpt none">
        </div>
        
    </div>

</body>
<script src="app/js/rdvp.js"></script>
</html>