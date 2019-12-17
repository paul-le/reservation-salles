<?php
    session_start();
?>


<html>
    <a href="inscription.php"> INSCRIPTION </a>
    <br><br>
    <a href="connexion.php"> CONNEXION </a>
</html>    


<?php
    
    if(isset($_SESSION['login']))
    {
        echo "Bienvenue ".$_SESSION['login'];
        echo "<form class='logoutform' method='post' action=''><input class='boutonlogout' type='submit' name='logout' value='Déconnexion'>
            </form>";
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('Location: connexion.php');
        }
    }
    else
    {
        echo "<br><br>T ki ?";
    }

    //echo '".$_SESSION['login']."';

?>
