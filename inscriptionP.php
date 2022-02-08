<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/inscription.css">
    <title>Inscription Patient</title>
</head>
<body>


    <div class="layoutP">
        <header>
            <a href="index.php" class="logo">MediCalendar</a>
        </header>
        <section class="inscription flex">
            <div class="section-inscription">
                <h2 class="title">Inscription Patient</h2>
                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "ez") == true) {
                    echo "<p>Email ou Numero ID national deja existant</p>";
                }
                ?>
                <section class="infos-perso">
                    <h3 class="sous-title">Informations Personnelles</h3>

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "empty") == true) {
                            echo "<p class='red'>Veuillez remplir les champs : Nom, Prenom, Numero ID national, Date de naissance, Nom Utilisateur, email et mot de passe </p>";
                        }
                        ?>

                    <form action="traitinscipat.php" method="POST">
                            <span id="validnom"></span>
                        <div class="input">
                            <label for="nom">Nom : </label>
                            <input type="text" class="nom inp" id="nom" name="nom">
                        </div>


                        <span id="validprenom"></span>
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

                        <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "idexiste") == true) {
                            echo "<p class='red'>Ce numero d'ID national existe deja</p>";
                        }
                        ?>
                        <span id="spid"></span>
                        <div class="input">
                            <label for="id">Numéro ID nationale : </label>
                            <input type="text" class="id inp" id="id" name="id">
                        </div>

                    </section>

                    <section class="infos-pro">
                        <h3 class="sous-title">Informations Profil</h3>

                        <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "mailexiste") == true) {
                            echo "<p class='red'>Cet email existe deja</p>";
                        }
                        ?>


                        <span id="validmail"></span>
                        <div class="input">
                            <label for="mail">Adresse mail : </label>
                            <input type="email" class="mail inp" id="mail" name="mail">

                        </div>
                        
                        <span id="validuser"></span>
                        <div class="input">
                            <label for="nomu">Nom utilisateur : </label>
                            <input type="text" class="nomu inp" id="nomu" name="nomu">
                            
                        </div>

                        <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "mdp") == true) {
                            echo "<p class='red'>mot de passe non confirmé</p>";
                        }
                        ?>

                        <div class="input">
                            <label for="mdp">Mot de passe : </label>
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

                    <div class="section-identif flex">
                        <p>Vous êtes un médecin ? </p>
                        <a href="inscriptionM.php" class="iden"> Inscrivez-vous !</a>
                    </div>
                </section>

                <div class="section-inscriptionM">
                    <p class="blue">Vous avez déja un compte?<a href="connexionP.php" class="iden">Connectez vous !</a></p>
                </div>
            </div>
            
            
        </section>

        <div class="imageP"></div>
    </div>
    
</body>
<script type="text/javascript" src="app/js/inscrivalid.js"></script>
</html>