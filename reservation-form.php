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
            <input type="datetime-local" name="dateDebut" value="2019-12-12T08:00" min="2019-01-07T08:00" max="2020-12-14T08:00" required ><br/><br/>

            <label>Date de Fin :</label>
            <input type="datetime-local" name="dateFin" value="2019-12-12T08:00" min="2019-01-07T19:00" max="2020-12-14T19:00" required><br/><br/>

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



    $requete3 = "SELECT id FROM utilisateurs WHERE login = '".$_SESSION['id']."'  ";
    $query3 = mysqli_query($connexion, $requete3);
    $resultat3 = mysqli_fetch_array($query3);

    echo $resultat3;



    if(isset($_POST['reservation']))

    {
        $requeteInsert = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$dateDebut', '$dateFin','".$_SESSION['id']."')";
        $query2 = mysqli_query($connexion , $requeteInsert);
        
        echo $requeteInsert;

   	}
?>