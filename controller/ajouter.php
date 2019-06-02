<?php

require_once ('../common/connexionBase.php');
include($_SERVER['DOCUMENT_ROOT'] . '/arborescence/php/cinematheca/.env');


//require_once ('../common/connexionBase.php');


$titre=$_POST['titre'];
$annee=$_POST['annee'];
$synopsis = $_POST['synopsis'];
$url_affiche = $_POST['url_affiche'];

if (isset($_POST['autre']) && (!EMPTY ($_POST['autre']))){
    $pays = $_POST['autre'];
    $stmt = $connection->prepare("INSERT INTO `pays` (`nom`) VALUES (:autre)");
    $stmt->bindParam(':autre', $pays);
    $stmt->execute();
}else{
    $pays = $_POST['pays'];
}


if (isset($_POST['autrePaysReal'])&& (!EMPTY ($_POST['autrePaysReal']))){
    $paysReal = $_POST['autrePaysReal'];
    $stmt = $connection->prepare("INSERT INTO `pays` (`nom`) VALUES (:autrePaysReal)");
    $stmt->bindParam(':autrePaysReal', $paysReal);
    $stmt->execute();
}else{
    $paysReal = $_POST['paysReal'];
}

if (isset($_POST['autreReal'])&& (!EMPTY ($_POST['autreReal']))){
    $realisateur = $_POST['autreReal'];

    $selectPaysReal = "SELECT id FROM pays WHERE nom = '". $paysReal ."'";
    $stmt = $connection->prepare("INSERT INTO `personne` (`full_name`, `pays_id`) VALUES (:full_name,(". $selectPaysReal. "))");
    $stmt->bindParam(':full_name', $realisateur);
    $stmt->execute();

}else{
    $realisateur = $_POST['realisateur'];
}












if (isset($_POST['autrePaysActeur'])&& (!EMPTY ($_POST['autrePaysActeur']))){
    $paysActeur = $_POST['autrePaysActeur'];
    $stmt = $connection->prepare("INSERT INTO `pays` (`nom`) VALUES (:autrePaysActeur)");
    $stmt->bindParam(':autrePaysActeur', $paysActeur);
    $stmt->execute();
}else{
    $paysActeur = $_POST['paysActeur'];
}

if (isset($_POST['autreActeur'])&& (!EMPTY ($_POST['autreActeur']))){
    $acteur = $_POST['autreActeur'];
    $selectPaysActeur = "SELECT id FROM pays WHERE nom = '". $paysActeur ."'";
    $stmt = $connection->prepare("INSERT INTO `personne` (`full_name`, `pays_id`) VALUES (:full_name,(". $selectPaysActeur. "))");
    $stmt->bindParam(':full_name', $acteur);
    $stmt->execute();

}else{
    $acteur = $_POST['acteur'];
}













if (isset($_POST['autrePaysActeur2'])&& (!EMPTY ($_POST['autrePaysActeur2']))){
    $paysActeur2 = $_POST['autrePaysActeur2'];

    $stmt = $connection->prepare("INSERT INTO `pays` (`nom`) VALUES (:autrePaysActeur2)");
    $stmt->bindParam(':autrePaysActeur2', $paysActeur2);
    $stmt->execute();
}else{
    $paysActeur2 = $_POST['paysActeur2'];
}

if (isset($_POST['autreActeur2'])&& (!EMPTY ($_POST['autreActeur2']))){
    $acteur2 = $_POST['autreActeur2'];

    $selectPaysActeur2 = "SELECT id FROM pays WHERE nom = '". $paysActeur2 ."'";
    $stmt = $connection->prepare("INSERT INTO `personne` (`full_name`, `pays_id`) VALUES (:full_name,(". $selectPaysActeur2. "))");
    $stmt->bindParam(':full_name', $acteur2);
    $stmt->execute();


}else{
    $acteur2 = $_POST['acteur2'];
}












if (isset($_POST['autrePaysActeur3'])&& (!EMPTY ($_POST['autrePaysActeur3']))){
    $paysActeur3 = $_POST['autrePaysActeur3'];
    $stmt = $connection->prepare("INSERT INTO `pays` (`nom`) VALUES (:autrePaysActeur3)");
    $stmt->bindParam(':autrePaysActeur3', $paysActeur3);
    $stmt->execute();
}else{
    $paysActeur3 = $_POST['paysActeur3'];
}

if (isset($_POST['autreActeur3'])&& (!EMPTY ($_POST['autreActeur3']))){
    $acteur3 = $_POST['autreActeur3'];

    $selectPaysActeur3 = "SELECT id FROM pays WHERE nom = '". $paysActeur3 ."'";
    $stmt = $connection->prepare("INSERT INTO `personne` (`full_name`, `pays_id`) VALUES (:full_name,(". $selectPaysActeur3. "))");
    $stmt->bindParam(':full_name', $acteur3);
    $stmt->execute();

}else{
    $acteur3 = $_POST['acteur3'];
}











$selectPays = "SELECT id FROM pays WHERE nom = '". $pays ."'";


$stmt = $connection->prepare("INSERT INTO `film` (`titre`, `annee`, `synopsis`, `url_affiche`, `pays_id`) VALUES (:titre, :annee, :synopsis, :url_affiche,(". $selectPays. "))");



$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':annee', $annee);
$stmt->bindParam(':synopsis', $synopsis);
$stmt->bindParam(':url_affiche', $url_affiche);


$stmt->execute();





$selectFilm = "SELECT id FROM film WHERE titre = '". $titre ."'";

$selectReal = "SELECT id FROM personne WHERE full_name = '". $realisateur ."'";

$selectActeur = "SELECT id FROM personne WHERE full_name = '". $acteur ."'";

$selectActeur2 = "SELECT id FROM personne WHERE full_name = '". $acteur2 ."'";

$selectActeur3 = "SELECT id FROM personne WHERE full_name = '". $acteur3 ."'";


$stmt = $connection->prepare("INSERT INTO `participe` (`personne_id`, `role_id`, `film_id`) VALUES ((" . $selectReal ."), (1),(". $selectFilm. "))");
$stmt->execute();

$stmt = $connection->prepare("INSERT INTO `participe` (`personne_id`, `role_id`, `film_id`) VALUES ((" . $selectActeur ."), (2),(". $selectFilm. "))");
$stmt->execute();

$stmt = $connection->prepare("INSERT INTO `participe` (`personne_id`, `role_id`, `film_id`) VALUES ((" . $selectActeur2 ."), (2),(". $selectFilm. "))");
$stmt->execute();

$stmt = $connection->prepare("INSERT INTO `participe` (`personne_id`, `role_id`, `film_id`) VALUES ((" . $selectActeur3 ."), (2),(". $selectFilm. "))");
$stmt->execute();


header('location:../index.php');



