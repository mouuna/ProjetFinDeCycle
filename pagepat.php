<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/style.css">
    <title>MediCalendar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="image-de-fond"></div>
    <div class="fond-vert"></div>

    <div class="grid">
        <header class="flex">
            <a href="#" class="logo">MediCalendar</a>
            <div class="liens">
                <a href="listeMp.php">Medecins</a>
                <a href="pagerdvp.php" class="">Mes Rendez-vous</a>
                <a href="editp.php" class="none"><?php echo $_SESSION["username"]; ?></a>
                <a href="connexionp.php">Déconnexion</a>
            </div>
        </header>
    
        <div class="sec-grid">
            <section class="flex main">
                <h1 class="title"> PRENEZ RENDEZ-VOUS PLUS RAPIDEMENT ET PLUS FACILEMENT AVEC <span class="sp">MediCalendar</span></h1>
                    <form action="trouvdocp.php" method="POST" class="recherche flex">
                        <input type="text" class="nom inp" placeholder="Nom du médecin" name="nomM">
                        <input type="text" class="specialite inp" placeholder="Spécialité" name="special">
                        <input type="submit" value="Rechercher" class="btn rechercher">
                    </form>
            </section>
        </div>
        

        <div class="info flex">
            <div class="card">
                <img src="images/icone connexion.svg" alt="" class="icone">
                <h2 class="card-title">Inscrivez vous</h2>
                <p class="card-text">Créez un compte pour
                    accéder à nos services</p>
            </div>
            <div class="card">
                <img src="images/icone recherche.svg" alt="" class="icone">
                <h2 class="card-title">Trouvez votre médecin</h2>
                <p class="card-text">Cherchez un médecin généraliste
                    ou spécialiste selon vos besoins</p>
            </div>
            <div class="card">
                <img src="images/icone rdv.svg" alt="" class="icone">
                <h2 class="card-title">Prenez RDV</h2>
                <p class="card-text">Après le choix de votre médecin
                    vous pouvez réserver le RDV de 
                    votre choix</p>
            </div>
        </div>
        
        <section class="flex secondary">
            <div class="th-grid">
                <div class="stetho">
                    <img src="images/Stethoscope.png" alt="" class="img">
                </div>
                <div class="medecin-invit flex">
                    <h2>Vous êtes médecin ?</h2>
                    <p class="med">Vous êtes un professionnel de la santé ?
                        Vous souhaitez développer votre activité ?
                        Nous pouvons vous y aider.</p>
                    <a href="inscriptionM.php" class="btn rejoindre">Rejoignez-nous !</a>
                </div>
            </div>
        </section>
        
    
        <footer class="flex">
            <div class="flex foot">
                <a href="#" class="logo">MediCalendar</a>
                <div class="liens">
                    <a href="contactusp.php">Contanct us</a>
                    <a href="connexiona.php">Admin login</a>
                </div>
            </div>
            <p class="all-r-r">© 2021 Groupe 2 RN. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>