<?php 
session_start();
session_destroy(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="app/css/connex.css">
    <title>Connexion Patient</title>
</head>
<body>

    <div class="layout ">

        <header>
            <a href="index.php" class="logo">MediCalendar</a>
        </header>

        <section class="connexion">

            <div class="section-connect">
                <h2>Connexion Patient</h2>

                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "incorrect") == true) {
                    echo "<p class='red'>Email ou mot de passe invalide</p>";
                }
                 ?>

                <form action="traitconnexionpat.php" method="POST">
                    <input type="text" class="nom-util inp" placeholder="E-mail" name="mail">
                    <span id="validationmail"></span>
                    <input type="password" id="mdp" class="mdp inp" placeholder="Mot de passe" name="mdp">
                    <span id="yeux">
                        <i id="oeil" class="fa fa-eye" aria-hidden="true"></i>
                        <i id="oeils" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                    <input type="submit" value="Se connecter" class="btn connect">
                </form>
            </div>

            <div class="section-inscription flex" style="justify-self: center;">
                <p>Vous êtes un Médecin ? </p>
                <a href="connexionM.php" class="iden"> Identifiez-vous !</a>
            </div>
            <div class="section-identif">
                <p>Vous découvrez MediCalendar?<a href="inscriptionP.php" class="iden">Créez un compte !</a></p>
                
            </div>
            
        </section>

        <div class="image"></div>
    </div>
    <script type="text/javascript" src="app/js/validconnex.js"></script>
</body>
</html>