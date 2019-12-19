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
                        <li class="liheader"><a href="index.php"> INDEX </a></li>
                        <li class="liheader"><a href="planning.php"> PLANNING </a></li>
                        <li class="liheader"><a href="reservation.php"> RÉSERVATION </a></li>
                        <?php if(!isset($_SESSION['login'])){?>
                        <li class="liheader"><a href="inscription.php"> INSCRIPTION </a></li>
                        <li class="liheader"><a href="connexion.php"> CONNEXION </a></li>
                        <?php } if(isset($_SESSION['login'])){?>
                        <li class="liheader"><a href="profil.php"> PROFIL </a></li>             <li class="liheader"><a href="logout.php"><img id="imglogout" src="images/deconnexion.png"></a></li>
                        <?php }?>   
                    </ul>
                </section>
                <section id="bottomheaderbg">
                    <section>
                    <?php if(isset($_SESSION['login'])){echo "<span class=\"bienvenue\"> Bienvenue ".$_SESSION['login']."</span>";}else{echo "<span class=\"bienvenue\">T ki ?</span>";}?>
                    </section>
                </section>
            </nav>
        <header>
        <main id="mainindex">
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/tomatemozza.jpg">
                </article>
                <article class="articlemain">
                    <ul class="articleli1">
                        <li>Réservation de salles pour dîner</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/restausalle2.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour dîner</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/birthdaycake.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour dîner</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/wedding.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour dîner</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
        </main>
        <footer>
            <section>
                <article id="footerimglogo">
                    <img src="images/logoreservationtrue.png">
                    <span id="titrefooterlogo">Réservation</span>
                </article>
            </section>
            <section>
                <article>
                    <ul>
                        <li class="lifooter"><a href="index.php"> INDEX </a></li>
                        <li class="lifooter"><a href="planning.php"> PLANNING </a></li>
                        <li class="lifooter"><a href="reservation.php"> RÉSERVATION </a></li>
                        
                        <?php if(!isset($_SESSION['login'])){?>
                        <li class="lifooter"><a href="inscription.php"> INSCRIPTION </a></li>
                        <li class="lifooter"><a href="connexion.php"> CONNEXION </a></li>
                        <?php } if (isset($_SESSION['login'])){ ?>
                        <li class="lifooter"><a href="profil.php"> PROFIL </a></li> <?php }?>
                    </ul>
                </article>
            </section>
            <section id="socialfootersection">
                <article id="socialfooter">
                    <img src="images/twitter.png">
                    <img src="images/facebook.png">
                    <img src="images/insta.png">
                </article>
                <article id="socialfooter2">
                    <img src="images/twitch.png">
                    <img src="images/discord.png">
                    <img src="images/youtube.png">
                </article>
            </section>
        </footer>
    </body>
</html>