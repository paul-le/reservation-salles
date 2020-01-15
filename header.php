<header>
            <nav>
                <section id="menuflexing">
                    <a href="index.php"><img id="logoheader" src="images/logoreservationtrue.png"></a>
                    <ul id="headerflex">
                        <li class="liheader"><a class="headerbouton" href="index.php"> ACCUEIL </a></li>
                        <li class="liheader"><a class="headerbouton" href="planning.php"> PLANNING </a></li>
                        <li class="liheader"><a class="headerbouton" href="reservation-form.php"> RÉSERVATION </a></li>
                        <?php if(!isset($_SESSION['login'])){?>
                        <li class="liheader"><a class="headerbouton" href="inscription.php"> INSCRIPTION </a></li>
                        <li class="liheader"><a class="headerbouton" href="connexion.php"> CONNEXION </a></li>
                        <?php } if(isset($_SESSION['login'])){?>
                        <li class="liheader"><a class="headerbouton" href="profil.php"> PROFIL </a></li>             <li class="liheader"><a id="boutondeco" href="logout.php"><img id="imglogout" src="images/deconnexion.png"></a></li>
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