<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de Reservation</title>
</head>
<body>
	<main>
		<form method="post" action="reservation-form.php">
			<label>Titre :</label>
            <input type="text" name="titre" required><br/><br/>

            <label>Description :</label>
            <input type="text" name="description" required><br/><br/>

            <label>Date de Debut :</label>
            <input type="datetime-local" name="dateDebut" value="2019-06-12T19:30" min="2019-01-07T00:00" max="2019-12-14T00:00" required ><br/><br/>

            <label>Date de Fin :</label>
            <input type="datetime-local" name="dateFin" value="2019-06-12T19:30" min="2019-01-07T00:00" max="2019-12-14T00:00" required><br/><br/>

            <input type="submit" value="Reservation" name="reservation" required>
        </form>
	</main>

</body>
</html>


<?php  

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

    $connexion = mysqli_connect("localhost", "root","","reservationsalles");

    if(isset($_POST['reservation']))
    {
        $requete = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$dateDebut', '$dateFin', 1)";
        $query = mysqli_query($connexion , $requete);
        
        echo $requete;

   	}
?>