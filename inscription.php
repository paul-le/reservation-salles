<?php

    session_start();
    $inscriptionimpossible = false;
    $connexion = mysqli_connect("localhost", "root","","reservationsalles");

    if(isset($_POST['password']))
    {
        $password1 = $_POST['password'];
        $passwordhash = password_hash($password1, PASSWORD_BCRYPT, array('cost' => 12));
    }

    if(isset($_POST['inscription']) == true && $_POST['password'] == $_POST['confirmationpassword'] && isset($_POST['login']) && strlen($_POST['login']) != 0 && isset($_POST['password']) && strlen($_POST['password']) != 0 && isset($_POST['confirmationpassword']) && strlen($_POST['confirmationpassword']) != 0)
    {
        $requete = "SELECT * FROM utilisateurs";
        $query = mysqli_query($connexion , $requete);
        $resultat = mysqli_fetch_all($query);

        foreach($resultat as $row_number => $logindup)
        {
            if($resultat[$row_number][1] == $_POST['login'])
            {
                $inscriptionimpossible = true;
            }
        }
        if($inscriptionimpossible == false)
        {
            $namelog = $_POST['login'];
            $requete2 = "INSERT INTO utilisateurs (login,password) VALUES ('$namelog','$passwordhash')";
            $query2 = mysqli_query($connexion , $requete2);
            header('Location: index.php');  
        }
    }

    mysqli_close($connexion);

?>

<!DOCTYPE html>
    <html>
        <head>
	        <title>Accueil</title>
            <link rel="stylesheet" href="style.css">
        </head>
    <body>
        <form method="post" action="inscription.php">
            <input type="text" placeholder="Identifiant" name="login" required><br/><br/>
            <input type="password" placeholder="Mot de passe" name="password" required><br/><br/>
            <input type="password" placeholder="Confirmation mot de passe" name="confirmationpassword" required><br/><br/>
            <input type="submit" value="S'inscrire" name="inscription" required>
        </form>
    </body>