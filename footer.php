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
                        <li class="lifooter"><a href="index.php"> ACCUEIL </a></li>
                        <li class="lifooter"><a href="planning.php"> PLANNING </a></li>
                        <li class="lifooter"><a href="reservation-form.php"> RÉSERVATION </a></li>
                        
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