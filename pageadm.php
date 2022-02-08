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
    <link rel="stylesheet" href="app/css/pageadm.css">
</head>

<body>

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecinavantverif");
    ?>

    <div class="fond-vert-light"><img src="images/background-light.svg" alt=""></div>

    <div class="grid">
        <header class="flex header">
            <a href="#" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMa.php" class="dark">Medecins</a>
                <!-- <a href="pagedem.php" class="dark">Demandes d'inscription</a> -->
                <a href="#" class="dark">MR. <?php echo $_SESSION["noma"]?></a>
                <a href="connexionM.php" class="dark">Déconnexion</a>
                
            </div>
        </header>
        <div class="image-de-fond"><img src="images/illustration page doc1.svg" alt=""></div>

        <div class="text marg">
            <h2>Bienvenue, MR. <?php echo $_SESSION["noma"]?></h2>

            <h3>Demandes d'inscription : </h3>
            <div class="sec-grid">

                <?php 
                while ($tuple = $tabmedecin->fetch()) {
                    echo '<div class="card">
                    <div class="flex infos">
                    <p class="bold">Nom medecin :</p>

                    <p class="light nomm">'.$tuple["nomM"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Prenom medecin :</p>
                    <p class="light prenomm">'.$tuple["prenomM"].'</p>
                    </div>

                    <div class="flex infos">
                    <p class="bold">Date naissance :</p>
                    
                    <p class="light dn">'.$tuple["daten"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Numero d\'ordre :</p>
                    
                    <p class="light no">'.$tuple["numordre"].'</p>
                    </div>

                    <div class="flex infos">
                    <p class="bold">Spécialité :</p>
                    
                    <p class="light spe">'.$tuple["specialite"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Adresse :</p>
                    
                    <p class="light adr">'.$tuple["adrss"].'</p>
                    </div>

                    <div class="flex infos">


                    <p class="bold">Numero tel :</p>
                    
                    <p class="light nt">'.$tuple["numtel"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Horaire :</p>
                    
                    <p class="light hor">'.$tuple["horaire"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Mail :</p>
                    
                    <p class="light mail">'.$tuple["mail"].'</p>
                    </div>

                    <div class="flex infos">

                    <p class="bold">Mot de passe :</p>
                    
                    <p class="light mdp">'.$tuple["mdp"].'</p>
                    <p class="idm none">'.$tuple["idm"].'</p>
                    </div>

                    </div>

                   <form action="traitinscrimeda.php" method="POST">
                    <div class="none">
                        <div class="input">
                            <label for="nom">Nom : </label>
                            <input type="text" class="nomto inp" id="nom" name="nom">
                            <span id="validnom"></span>
                        </div>

                        <div class="input">
                            <label for="prenom">Prenom : </label>
                            <input type="text" class="prenomto inp" id="prenom" name="prenom">
                            <span id="validprenom"></span>
                        </div>

                        <div class="input">
                            <label for="dn">Date de naissance : </label>
                            <input type="date" class="dnto inp" id="dn" name="dn">
                        </div>

                        <div class="input">
                            <label for="numordre">Numéro d\'ordre des médecins : </label>
                            <input type="text" class="noto inp" id="numordre" name="numordre">
                        </div>

                        <div class="input">
                            <label for="special">Spécialité : </label>
                            <input type="text" class="speto inp" id="special" name="special">
                        </div>

                        <div class="input">
                            <label for="adr">Adresse du cabinet médical :</label>
                            <input type="text" class="adrto inp" id="adr" name="adr">
                        </div>

                        <div class="input">
                            <label for="numtel">Numéro de téléphone :</label>
                            <input type="text" class="ntto inp" id="numtel" name="numtel">
                        </div>

                        <div class="input">
                            <label for="horr">Horaires d\'ouverture (XXh-XXh) :</label>
                            <input type="text" class="horto inp" id="horr" name="horr">
                        </div>

                        <div class="input">
                            <label for="mail">Adresse mail : </label>
                            <input type="email" class="mailto inp" id="mail" name="mail">
                            <span id="validmail"></span>
                        </div>

                        <div class="input">
                            <label for="mdp">Mot de passe : </label>
                            <input type="password" class="mdpto inp" id="mdp" name="mdp">
                            <input type="text" class="idmto inp" id="idm" name="idm">
                            
                        </div>

                        <div class="input">
                            <label for="cmdp">Confirmer MDP </label>
                            <input type="password" class="cmdp inp" id="cmdp">
                        </div>

                        
                    </div>
                    <div class="marg">
                            <input type="submit" name="submit" class="submit btn" value="Verifier et Inscrire">
                        </div>
                </form> ';
                }
                ?>
                


                
            </div>

        </div>

    </body>

    <script type="text/javascript" src="app/js/inscription.js"></script>

    </html>