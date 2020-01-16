<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.php")?>
        <main id="mainindex">
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/tomatemozza.jpg">
                </article>
                <article class="articlemain">
                    <ul class="articleli1">
                        <li>Réservation de salles pour dîner</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/restausalle2.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour quelconque raison</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/birthdaycake.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour anniversaire</li>
                        <li>Plusieurs tables disponible</li>
                        <li>Boisson offerte si plus de 15 personnes</li>
                    </ul>
                </article>
            </section>
            <section class="sectionstyle">
                <article class="articleimg">
                    <img src="images/wedding.jpg">
                </article>  
                <article>
                    <ul class="articleli1">
                        <li>Réservation de salles pour mariages</li>
                        <li>Plusieurs salles disponibles</li>
                        <li>Matériel musical à disposition</li>
                    </ul>
                </article>
            </section>
        </main>
            <?php include("footer.php")?>
    </body>
</html>

