<?php
    session_start();
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
                <table>
                    <?php 
                        echo "<th></th>";
                        echo "<th>Lundi</th>";
                        echo "<th>Mardi</th>";
                        echo "<th>Mercredi</th>";
                        echo "<th>Jeudi</th>";
                        echo "<th>Vendredi</th>";

                    for($heure = 8; $heure <= 19 ; $heure++)
                    {
                        echo "<tr>";
                        echo "<td><b>$heure h</b></td>";
                    for($jour = 0; $jour < 5; $jour++)
                    {
                        echo "<td><center>$jour";
                    }
                        echo "</td>";
                    }
                        echo "</tr>";
                    
                    ?>
                </table>
            </section>
        </main>
        <?php include("footer.php")?>
    </body>
</html>