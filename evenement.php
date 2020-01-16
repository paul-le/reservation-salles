<?php
    session_start();
    if (isset($_GET['id'])) 
    {
        $connexion = mysqli_connect("localhost","root","","reservationsalles");
        $Event = " SELECT * FROM reservations WHERE id = '".$_GET['id']."' ";
        $queryEvent = mysqli_query($connexion, $Event);
        $afficheEvent = mysqli_fetch_assoc($queryEvent);
        $requete = "SELECT u.id , u.login , r.titre , r.description , r.debut , r.fin FROM utilisateurs AS u INNER JOIN reservations AS r ON u.id = r.id_utilisateur";
        $queryusers = mysqli_query($connexion, $requete);
        $resultatusers = mysqli_fetch_assoc($queryusers);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Events</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php")?>
        <main>
            <section id="sectioneventsflexaffichage">
                <section id="sectioneventsinside">
            <?php 
                    echo "<b>Réserver par l'utilisateur </b> ".$resultatusers['login']."<br>";
                    echo "<b>Titre de l'événement </b> ".$afficheEvent['titre']."<br>";
                    echo "<b>Description de l'événement </b> " .$afficheEvent['description']."<br>";
                    echo "<b>Début de l'évenement </b> " .$afficheEvent['debut']."<br>"; 
                    echo "<b>Fin de l'événement </b> " .$afficheEvent['fin']."<br>"; 
            ?>
                </section>
            </section>
        </main>
        <?php include("footer.php")?>
    </body>
</html>