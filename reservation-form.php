<?php
    session_start();

    if(isset($_SESSION['login']))

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
    
    error_reporting(0);
    ini_set('display_errors', 0);
    date_default_timezone_set("Europe/Paris");
    $loginlog = $_SESSION['id'];
    $intloginlog = intval($loginlog);
    $connexion = mysqli_connect("localhost", "root","","reservationsalles");
    //$requete3 = "SELECT id FROM utilisateurs WHERE login = \"$loginlog\"  ";
    //$query3 = mysqli_query($connexion, $requete3);
    //$resultat3 = mysqli_fetch_all($query3);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Réservation</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php")?>
        <main id="mainreservationform">
        <section id="sectionevents">
            <section id="sectioneventsflex">
            <form method="post" id="reservationform" action="">
                <?php if(isset($_SESSION['login']))
                { ?>
                <h1 id="reservationh1">- Réservation -</h1>
			    <label>Titre :</label>
                    <input type="text" name="titre" required><br/><br/>
                <label>Description :</label>
                    <input type="text" name="description" required><br/><br/>
                <label>Date de Debut :</label>
                    <input type="datetime-local" name="dateDebut" value="2020-01-13T08:00" min="2020-01-13T08:00" max="2020-1201-10T08:00" required ><br/><br/>
                <label>Date de Fin :</label>
                    <input type="datetime-local" name="dateFin" value="2020-01-13T09:00" min="2020-01-31T9:00" max="2020-01-31T19:00" required><br/><br/>
                    <input type="submit" value="Réserver" name="reservation" required>
                <?php }
                else
                {
                    echo "<article id='idneeded'>Connectez-vous pour réserver</article>";
                } ?>
            </section>
        </section>
            </form>
        </main>

<?php 

            $connexion2 = mysqli_connect("localhost", "root","","reservationsalles");
            //$reservationpost = $_POST['reservation'];
            $requeteres = "SELECT debut FROM reservations";
            $queryres = mysqli_query($connexion2,$requeteres);
            $resultatreservationcheck = mysqli_fetch_all($queryres);
            $tableaudatecount = count($resultatreservationcheck);
            

            //var_dump($resultatreservationcheck[0][0]);
            
      
        if(isset($_POST['reservation']))
        {
            $dateheure = date("Y-m-d H:i:s", strtotime($_POST['dateDebut']));
            $i = 0;
            $eventexists = false;

            while($i < $tableaudatecount)
            {
                if($resultatreservationcheck[$i][0] == $dateheure)
                {
                    echo "";
                    $eventexists = true;
                }
                $i++;
            }

            if($eventexists == false)
            {
                $requeteInsert = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$dateDebut', '$dateFin' , $intloginlog )";
                $query2 = mysqli_query($connexion , $requeteInsert);
                $creneau = "";

                header('location:planning.php');
            }
            else
            {
                echo "Créneau déjà pris";
            }

        }
            include("footer.php")?>
        </body>
    </html>
