<?php

require_once ('./common/connexionBase.php');

$stmt = $connection->prepare("SELECT * FROM `pays` ORDER BY nom asc ");
$stmt->execute();
$lesPays = $stmt->fetchall();

$stmt2 = $connection->prepare("SELECT * FROM `personne` ORDER BY full_name asc");
$stmt2->execute();
$lesPersonnes = $stmt2->fetchall();

?>



<div class="container blocPrincipalForm d-flex align-items-center">
    <div class="row ">

        <form class="row d-flex justify-content-center" action="./controller/ajouter.php" method="POST">
            <input type="hidden" name="id" value="">

            <div class="col-12 text-white d-flex justify-content-center">
                <h2>Le film</h2>
            </div>
            <!--                <label for="titre">Titre :</label>-->
            <input class="col-5" type="text" name="titre" id="titre" placeholder="Titre" value="">


            <!--                <label for="annee">Année :</label>-->
            <input class="col-5" type="text" name="annee" id="annee" placeholder="Année" value="">


            <!--                <label for="synopsis">Synopsis :</label>-->
            <input class="col-5" type="text" name="synopsis" id="synopsis" placeholder="Synopsis" value="">


            <!--                <label for="url_affiche">Url Affiche :</label>-->
            <input class="col-5" type="text" name="url_affiche" id="url_affiche" placeholder="Affiche" value="">


            <!--            <label for="pays">Nom :</label>-->
            <select  class="col-5" name="pays" id="pays">
                <?php
                foreach ($lesPays as $pays){
                    echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autre" id="autre" placeholder="Ou autre pays">






            <div class="col-12 text-white d-flex justify-content-center">
                <h2>Réalisateur</h2>
            </div>

            <select  class="col-5" name="realisateur" id="realisateur">
                <?php
                foreach ($lesPersonnes as $realisateur){
                    echo '<option value="' . $realisateur["full_name"] . '">' . $realisateur["full_name"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autreReal" id="autreReal" placeholder="Ou autre réalisateur">

            <select  class="col-5" name="paysReal" id="paysReal">
                <?php
                foreach ($lesPays as $pays){
                    echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autrePaysReal" id="autrePaysReal" placeholder="Ou autre pays">








            <div class="col-12 text-white d-flex justify-content-center">
                <h2>Acteur principal</h2>
            </div>

            <select  class="col-5" name="acteur" id="acteur">
                <?php
                foreach ($lesPersonnes as $acteur){
                    echo '<option value="' . $acteur["full_name"] . '">' . $acteur["full_name"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autreActeur" id="autreActeur" placeholder="Ou autre acteur">

            <select  class="col-5" name="paysActeur" id="paysActeur">
                <?php
                foreach ($lesPays as $pays){
                    echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autrePaysActeur" id="autrePaysActeur" placeholder="Ou autre pays">

            <div class="col-12 text-white d-flex justify-content-center">
                <h2>Acteurs secondaires</h2>
            </div>


            <select  class="col-5" name="acteur2" id="acteur2">
                <?php
                foreach ($lesPersonnes as $acteur2){
                    echo '<option value="' . $acteur2["full_name"] . '">' . $acteur2["full_name"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autreActeur2" id="autreActeur2" placeholder="Ou autre Acteur">

            <select  class="col-5" name="paysActeur2" id="paysActeur2">
                <?php
                foreach ($lesPays as $pays){
                    echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autrePaysActeur2" id="autrePaysActeur2" placeholder="Ou autre pays">






            <select  class="col-5" name="acteur3" id="acteur3">
                <?php
                foreach ($lesPersonnes as $acteur3){
                    echo '<option value="' . $acteur3["full_name"] . '">' . $acteur3["full_name"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autreActeur3" id="autreActeur3" placeholder="Ou autre réalisateur">

            <select  class="col-5" name="paysActeur3" id="paysActeur3">
                <?php
                foreach ($lesPays as $pays){
                    echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
                }
                ?>

            </select>
            <input class="col-5" type="text" name="autrePaysActeur3" id="autrePaysActeur3" placeholder="Ou autre pays">




            <input class="col-3" type="submit" value="Ajouter">



        </form>
    </div>
</div>