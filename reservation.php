<?php
    session_start();

	if(isset($_POST["titre"]))
	{
		$titre=$_POST["titre"];
	}
	if(isset($_POST["description"]))
	{
		$description=$_POST["description"];
	}
	if(isset($_POST["dateDebut"]))
	{
		$dateDebut=$_POST["dateDebut"];
	}
	if(isset($_POST["dateFin"]))
	{
		$dateFin=$_POST["dateFin"];
	}
	 	
    date_default_timezone_set("Europe/Paris");
    $loginlog = $_SESSION['id'];
    $intloginlog = intval($loginlog);
    $connexion = mysqli_connect("localhost", "root","","reservationsalles");
    //$requete3 = "SELECT id FROM utilisateurs WHERE login = \"$loginlog\"  ";
    //$query3 = mysqli_query($connexion, $requete3);
    //$resultat3 = mysqli_fetch_all($query3);

    if(isset($_POST['reservation']))
    {
        $requeteInsert = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$dateDebut', '$dateFin' , $intloginlog )";
        $query2 = mysqli_query($connexion , $requeteInsert);
        
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
                    <input type="text" name="titre" required><br/><br/>
                <label>Description :</label>
                    <input type="text" name="description" required><br/><br/>
                <label>Date de Debut :</label>
                    <input type="datetime-local" name="dateDebut" value="2020-01-06T08:00" min="2020-01-06T08:00" max="2020-1201-10T08:00" required ><br/><br/>
                <label>Date de Fin :</label>
                    <input type="datetime-local" name="dateFin" value="2020-01-06T09:00" min="2020-01-06T19:00" max="2020-01-10T19:00" required><br/><br/>
                    <input type="submit" value="Réserver" name="reservation" required>
        </form>
        </main>
        <?php include("footer.php")?>
    </body>
</html>