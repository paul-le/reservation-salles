<?php
    session_start();
    $connexion = mysqli_connect("localhost", "root","","reservationsalles");
    $requete = "SELECT u.id , u.login , r.titre , r.description , r.debut , r.fin FROM utilisateurs AS u INNER JOIN reservations AS r ON u.id = r.id_utilisateur";
    $query = mysqli_query($connexion,$requete);
    $resultat = mysqli_fetch_all($query);
    $requetedate = "SELECT debut FROM reservations";
    $querydate = mysqli_query($connexion, $requetedate);
    $resultatdate = mysqli_fetch_all($querydate);
    //$formatjour = date('d');
    //$formatheure = date('h');
    //$format= date('Y-m-d  H');
    var_dump($resultatdate);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Planning</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php")?>
        <main>
            <section id="sectiontableplanning">
                <section id="sectiontableflex">
                <table>
                    <th></th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                <?php 

                $i = 0;
                $tableaudatecount = count($resultatdate);
                for($heure = 8; $heure <= 19 ; $heure++)
                {
                    echo "<tr>";
                    echo "<td><br><b>$heure h</b></td>";
                for($jour = 0; $jour < 5; $jour++)
                {
                while($i < $tableaudatecount)
                {
                        $dateheure = date("H", strtotime($resultatdate[$i][0]));
                        $datejour = date("w", strtotime($resultatdate[$i][0])-1);
                        
                        echo $dateheure."<br>";
                        echo $datejour."<br>";

                        $i++;
                }
            }
            echo "</td>";
        }
            echo "</tr>";

                ?>
                </table>
                <section>
            </section>
        </main>
        <?php include("footer.php")?>
    </body>
</html>

$dateheure =  date("H" , strtotime($date[1]);
$datejour = date("w" , strtotime[$date[1]]) -1;



TOAST = 