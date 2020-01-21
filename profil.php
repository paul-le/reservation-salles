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
                                <input type="text" name="login" placeholder="<?php echo $resultat['login']; ?>"><br>

                            <label> Votre mot de passe </label><br>
                                <input type="password" name="password"><br>

                            <label> Confirmez votre mot de passe </label><br>
                                <input type="password" name="passwordcon"><br>
                            
                            <input type="submit" value="Modifier" name="modifier" /><br>
                    <section>
            <?php } ?>
            <?php 

                if(isset($_POST['modifier']))
                {
                    $connexion = mysqli_connect("localhost", "root","", "reservationsalles");
                        $login = $_POST['login'] ;                   
                        $requete3 = "SELECT login FROM utilisateurs WHERE login = '$login'";         
                        $query3 = mysqli_query($connexion, $requete3);         
                        $resultat3 = mysqli_fetch_all($query3);             
                        if (!empty($_POST['login']) && $resultat3 == $_POST['login'])             
                        {                 
                            echo "Ce Login est déjà prit";             
                        }
                        elseif ($_POST['password'] != $_POST['passwordcon']) 
                        {
                            echo "Les Mots de passes ne correspondent pas";
                        }          
                        else
                        {
                            if($_POST['login'] != $resultat['login'] && !empty($_POST['login']))

                            {
                                
                               if(isset($_POST["login"]))
                                {
                                    $login=$_POST["login"];
                                }
                                
                               $connexion = mysqli_connect("localhost","root","","reservationsalles");
                               $upLog = "UPDATE utilisateurs SET login = \"$login\" WHERE utilisateurs.login='".$resultat['login']."'";
                               $result = mysqli_query($connexion, $upLog);

                            }
                            if($_POST['password'] != $resultat['password'] && !empty($_POST['password']))
                            {
                               $password1 = $_POST['password'];
                               $passwordhash = password_hash($password1, PASSWORD_BCRYPT, array('cost' => 12));
                               $connexion = mysqli_connect("localhost","root","","reservationsalles");
                               $upPass = "UPDATE utilisateurs SET password = \"$passwordhash\" WHERE utilisateurs.password='".$resultat['password']."'";
                               $result = mysqli_query($connexion, $upPass);
                               
                            }
                        }
                }
            ?>
        </main>
        <?php include("footer.php")?>
    </html>

    