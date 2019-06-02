<?php

require_once ('./common/connexionBase.php');


$id = $_GET['id'];

$stmt = $connection->prepare("SELECT * FROM `participe` INNER JOIN film ON participe.film_id = film.id INNER JOIN personne ON participe.personne_id = personne.id INNER JOIN role ON participe.role_id = role.id WHERE role.nom LIKE '%act%' AND participe.film_id=" . $id);
$stmt->execute();
$participe = $stmt->fetchall();

$stmt3 = $connection->prepare("SELECT * FROM `participe` INNER JOIN film ON participe.film_id = film.id INNER JOIN personne ON participe.personne_id = personne.id INNER JOIN role ON participe.role_id = role.id WHERE role.nom LIKE '%isa%' AND participe.film_id=" . $id);
$stmt3->execute();
$realisateurs = $stmt3->fetchall();

$stmt2 = $connection->prepare("SELECT film.titre, film.annee, film.synopsis, film.url_affiche, pays.nom FROM `film` INNER JOIN `pays` ON film.pays_id = pays.id WHERE film.id =" . $id);
$stmt2->execute();
$film = $stmt2->fetchall();

?>


<div class="container blocPrincipal">
    <div class="row text-white pt-4">

        <?php

        foreach($film as $affiche) {

        ?>

        <div class="col-12 col-md-4 d-flex justify-content-center pb-4 "><img src="<?php echo $affiche['url_affiche'];?>" alt="Image"></div>

        <div class="col-12 col-md-8">
            <h2><?php echo $affiche['titre'] . " " . "(" . $affiche['annee'] . ")";?></h2>
            <p><?php echo $affiche['nom'];?></p>
            <br>

            <?php
            }
            ?>



            <?php

            foreach ($realisateurs as $personne){
                ?>

                <h3>Réalisateur</h3>
                <p><?php echo $personne['full_name'];?></p>



                <?php
            }
            ?>

            <h3>Acteurs Principaux</h3>

            <?php

            foreach ($participe as $personne){
                ?>


                <p><?php echo $personne['full_name'];?></p>

                <?php
            }

            ?>


            <a href="./controller/supprimer.php?id=<?= $id ?>">
                <i class="fas fa-trash-alt"></i>
            </a>

        </div>
    </div>
</div>

<div class="container">
    <div class="row text-white">
        <h2 class="text-white">Synopsis</h2>

        <?php

        foreach($film as $affiche) {

            ?>

            <p><?php echo $affiche['synopsis'];?></p>

            <?php
        }
        ?>

    </div>
</div>