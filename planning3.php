<?php
    session_start();
    var_dump($_SESSION);
    $connexion = mysqli_connect("localhost", "root","","reservationsalles");
    $requete = "SELECT u.id , u.login , r.titre , r.description , r.debut , r.fin FROM utilisateurs AS u INNER JOIN reservations AS r ON u.id = r.id_utilisateur";
    $query = mysqli_query($connexion,$requete);
    $resultat = mysqli_fetch_all($query);
    var_dump($resultat);
    $format= date('Y-m-d  H');
    $requetedate = "SELECT debut FROM reservations";
    $querydate = mysqli_query($connexion, $requetedate);
    $resultatdate = mysqli_fetch_all($querydate);
    
    echo $format;

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
                    <?php 

                        
                        $jourssemaine = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
                        $j = 0;
                        $h = 8;
                        $jourscases = 0;

                        //echo "<thead>";
                        echo "<tr>";
                        echo "<th></th>";
                        while($j < 7)
                        {
                            echo "<th>".$jourssemaine[$j]."</th>";
                            $j++;
                        }
                        echo "</tr>";
                        //echo "</thead>";
                        //echo "<tbody>";
                        while($h != 20)
                        {
                            echo "<tr>";
                            if($jourscases == 0)
                            {
                                echo "<td><b>".$h." h</b></td>";
                                $jourscases++;
                            }
                            while($jourscases < 8 && $jourscases != 0)
                            {
                                echo "<td>$jourscases$h</td>";
                                $jourscases++;
                            }
                        
                            echo "</tr>";
                            $jourscases = 0;
                            $h++;
                        }
                        //echo "</tbody>";

                        $r = 0;
                        $tableaudatecount = count($resultatdate);

                        while($r < $tableaudatecount)
                        {
                        $dateheure = date("G", strtotime($resultatdate[$r][0]));
                        $datejour = date("w", strtotime($resultatdate[$r][0])-1);  
                            if($datejour == $j && $dateheure == $h)
                            {
                                echo "Réservé";
                            }
                            else
                            {
                                echo "";
                            }
                        $r++;
                        }
                        echo $datejour;
                        echo $dateheure;
                        
                    
                    ?>
                </table>
                <section>
            </section>
        </main>
        <?php include("footer.php")?>
    </body>
</html> 


//foreach dates
                                    //Si le jour de la semaine est égal à j et l'heure est égale à h : afficher la réservation