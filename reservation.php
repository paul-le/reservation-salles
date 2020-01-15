<?php
    session_start();
    if (isset($_GET['id'])) 
    {
        $connexion = mysqli_connect("localhost","root","","reservationsalles");
        $Event = " SELECT * FROM reservations WHERE id = '".$_GET['id']."' ";
        $queryEvent = mysqli_query($connexion, $Event);
        $afficheEvent = mysqli_fetch_assoc($queryEvent) ;
        echo $Event;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Réservation</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php")?>
        <main>
            <form method="post" action="reservation.php">
			    <label>Titre :</label>
                    <input type="text" name="titre" value="<?php echo $afficheEvent['titre']; ?>"><br/><br/>
                <label>Description :</label>
                    <input type="text" name="description"  value="<?php echo $afficheEvent['description']; ?>"><br/><br/>
                <label>Date de Debut :</label>
                    <input type="text" name="dateDebut" value="<?php echo $afficheEvent['debut']; ?>"  ><br/><br/>
                <label>Date de Fin :</label>
                    <input type="text" name="dateFin" value="<?php echo $afficheEvent['fin']; ?>"  ><br/><br/>
                   
        </form>
        </main>
        <?php include("footer.php")?>
    </body>
</html>