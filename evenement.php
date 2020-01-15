<?php
    session_start();
    if (isset($_GET['id'])) 
    {
        $connexion = mysqli_connect("localhost","root","","reservationsalles");
        $Event = " SELECT * FROM reservations WHERE id = '".$_GET['id']."' ";
        $queryEvent = mysqli_query($connexion, $Event);
        $afficheEvent = mysqli_fetch_assoc($queryEvent) ;
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