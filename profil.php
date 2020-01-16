<?php
session_start();
$connexion = mysqli_connect("localhost","root","","reservationsalles");
$requete = "SELECT * FROM utilisateurs WHERE login = '".$_SESSION['login']."' ";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Profil</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <?php include("header.php") ?>
        <main id="mainprofil">
        <?php if (isset($_SESSION['login'])){ ?>
                <section id="sectionformprofil">
                    <form action="" method="post" id="profilform">
                    <h1 id="h1profil">PROFIL</h1>
                        <label> Votre Login </label><br>
                            <input type="text" name="login" value="<?php echo $resultat['login']; ?>"><br>
                        <label> Votre mot de passe </label><br>
                            <input type="password" name="password"><br>
                        <label> Confirmez votre mot de passe </label><br>
                            <input type="password" name="passwordcon"><br>
                        <input name="ID" type="hidden" value=<?php echo $resultat['id']; ?>>
                        <input type="submit" name="confirmer" value="Confirmer">
                        <br><br>
                <section>
                    <?php } ?>
        </main>
        <?php include("footer.php")?>
    </html>