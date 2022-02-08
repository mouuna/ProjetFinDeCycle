<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer Compte</title>
    <link rel="stylesheet" href="app/css/edit.css">
</head>

<body>

    <div class="layoutP">
        <header class="flex header">
            <a href="pagepat.php" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMp.php" class="dark">Medecins</a>
                <a href="pagerdvp.php" class="dark">Mes Rendez-vous</a>
                <a href="#" class="dark"><?php echo $_SESSION["username"]; ?></a>
                <a href="connexionP.php" class="dark">Déconnexion</a>
            </div>
        </header>
        <section class="inscription flex">


            <section class="infos-pro">
                <h3 class="sous-title">Modification du compte</h3>

                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "mdp") == true) {
                    echo "<p class='red textc' style='color : red;'>Mot de passe non confirmé!</p>";
                }
                if (strpos($fullUrl, "edite") == true) {
                    echo "<p class='red textc' style='color : green;'>Compte Modifié!</p>";
                }
                if (strpos($fullUrl, "empty") == true) {
                    echo "<p class='red textc' style='color : red;'>Veuillez remplir tous les champs</p>";
                }

                ?>

                <form action="traiteditp.php" method="POST">
                    <div class="input">
                        <label for="nom">Nom : </label>
                        <input type="text" class="nom inp" id="nom" name="nom">
                    </div>

                    <div class="input">
                        <label for="prenom">Prenom : </label>
                        <input type="text" class="prenom inp" id="prenom" name="prenom">
                    </div>

                    <div class="input">
                        <label for="dn">Date de naissance : </label>
                        <input type="date" class="dn inp" id="dn" name="dn">
                    </div>

                    <div class="input">
                        <label for="adr">Adresse : </label>
                        <input type="text" class="adr inp" id="adr" name="adr">
                    </div>
                    <div class="input">
                        <label for="mail">Adresse mail : </label>
                        <input type="email" class="mail inp" id="mail" name="mail">
                    </div>

                    <div class="input">
                        <label for="mdp">Nouveau MDP : </label>
                        <input type="password" class="mdp inp" id="mdp" name="mdp">
                    </div>

                    <div class="input">
                        <label for="cmdp">Confirmer MDP </label>
                        <input type="password" class="cmdp inp" id="cmdp" name="cmdp">
                    </div>

                    <div class="marg">
                        <input type="submit" name="submit" class="submit btn" value="Valider">
                    </div>
                </form>
            </section>


        </div>


    </section>

    <div class="imageP"></div>
</div>

</body>

</html>