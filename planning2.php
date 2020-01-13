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
    $tableaudatecount = count($resultatdate); 
    
    echo $format;
    var_dump($resultatdate);
    $stopnope = false;
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
                        echo "<tr>";
                        echo "<th></th>";
                        
                        while($j < 7)
                        {
                            echo "<th>".$jourssemaine[$j]."</th>";
                            $j++;
                        }
                        echo "</tr>";
                        while($h != 20)
                        {
                            $resok = false;
                            echo "<tr>";
                            if($jourscases == 0)
                            {
                                echo "<td><b>".$h." h</b></td>";
                                $jourscases++;
                            }
                            $r = 0;
                              
                                            $jourscases = 1;
                                        while($jourscases < 8 && $jourscases != 0)
                                        {
                                            while($r < $tableaudatecount)
                                            {
                                            $stopitnow = true;
                                            $dateheure = date("G", strtotime($resultatdate[$r][0]));
                                            $datejour = date("N", strtotime($resultatdate[$r][0]));
                                            //var_dump($tableaudatecount);
                                           if($datejour == $jourscases && $dateheure == $h)
                                            {
                                                echo "<td>Yes</td>";
                                                $stopnope = true;
                                            }
                                            else {
                                                $stopitnow = false;
                                            }

                                            
                                            $r++;
                                            var_dump($r);
                                            }

                                            if ($stopitnow == false  && $stopnope == false)
                                            {
                                                echo "<td>Nope</td>";
                                            }
                                            $r = 0;
                                            $jourscases++;
                                            $stopitnow = false;
                                            $stopnope = false;
                                        }

                                        // CREER UNE NOUVELLE BOUCLE POUR AFFICHER DANS LES TD ET PAS FAIRE UNE BOUCLE SEULEMENT POUR AFFICHER UN TD
                                    
                                
                            echo "</tr>";
                            $jourscases = 0;
                            $h++;
                            
                        }
                    
                        
                        //echo "</tbody>";
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
