<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <section id="menuflexing">
                    <img id="logoheader" src="images/logoreservationtrue.png">
                    <ul id="headerflex">
                        <li><a href="index.php"> INDEX </a></li>
                        <li><a href="planning.php"> PLANNING </a></li>
                        <li><a href="reservation.php"> RÉSERVATION </a></li>
                        <li><a href="profil.php"> PROFIL </a></li>
                        <?php if(!isset($_SESSION['login'])){?>
                        <li><a href="inscription.php"> INSCRIPTION </a></li>
                        <li><a href="connexion.php"> CONNEXION </a></li>
                        <?php } if(isset($_SESSION['login'])){?>
                            <form method="post" action="index.php"><input class="boutonlogout" type="submit" name="logout" value="Déconnexion">
                        </form> 
                        <?php }if(isset($_POST['logout'])){
                            session_destroy();
                            header('Location: connexion.php');
                            }
                        ?>
                    </ul>
                </section>
                <section id="bottomheaderbg">
                    <?php if(isset($_SESSION['login'])){echo "<span class=\"bienvenue\"> Bienvenue ".$_SESSION['login']."</span>";}else{echo "<span class=\"bienvenue\">T ki ?</span>";}?>
                </section>
            </nav>
        <header>
        <main>
        </main>
    </body>
</html>