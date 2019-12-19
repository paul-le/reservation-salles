<?php
    session_start();
    //$connexionimpossible = false;


    if(isset($_POST['login']) && isset($_POST['password']))
    {

        $log = $_POST['login'];
        //$pwd = $_POST['password'];
        $connexion = mysqli_connect("localhost", "root","","reservationsalles");
        $requete = "SELECT count(*) as toast FROM utilisateurs WHERE login = \"$log\"";
        $query = mysqli_query($connexion, $requete);
        $requetehash = "SELECT password FROM utilisateurs WHERE login = \"$log\"";
        $query2 = mysqli_query($connexion,$requetehash);
        $resultat = mysqli_fetch_array($query);
        $count = $resultat['toast'];
        $resultat2 = mysqli_fetch_array($query2);
        
        echo $count;

        if($count > 0 && password_verify($_POST['password'],$resultat2['password']))
        {
            $_SESSION['login'] = $log;
            header('Location: index.php');
        }
        else
        {
            echo "Mauvais logs.";
        }

    }


?>



<html>
    <form method="POST" action="connexion.php">
        <input type="text" placeholder="Identifiant" name="login" required><br><br>
        <input type="password" placeholder="Mot de passe" name="password" required><br><br>
        <input type="submit" name="connexion" value="Se connecter">
    </form>
</html>