<?php
    session_start();
    $connexionimpossible = false;

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

        if($count > 0 && password_verify($_POST['password'],$resultat2['password']))
        {
            $_SESSION['login'] = $log;
            header('Location: index.php');
        }
        else
        {
            $connexionimpossible = true;
        }
    }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php") ?>
        <main id="mainconnexion">
            <section id="sectionformconnexion">
                <form id="connexionform" method="POST" action="connexion.php">
                    <h1 id="h1connexion">- Connexion -</h1><br><br>
                    <input type="text" placeholder="Identifiant" name="login" required><br><br>
                    <input type="password" placeholder="Mot de passe" name="password" required><br><br>
                    <input type="submit" name="connexion" value="Se connecter">                    <?php if($connexionimpossible == true)
                            {
                                echo "<br><br><span id=\"mauvaislogs\"> /!\  Mauvais identifiant ou mot de passe.  /!\ ";
                            } ?>
                </form>
            </section>
        </main>
        <?php include("footer.php")?>
    </body>
</html>