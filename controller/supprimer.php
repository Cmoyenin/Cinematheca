<?php

require_once ('../common/connexionBase.php');
include($_SERVER['DOCUMENT_ROOT'] . '/arborescence/php/cinematheca/.env');

$id = $_GET['id'];


//$selectParticipe = "SELECT id FROM participe WHERE id = '". $id ."'";

$stmt = $connection->prepare("DELETE FROM participe WHERE film_id= :id");
$stmt->bindParam(':id', $id);
$stmt->execute();


//$selectFilm = "SELECT id FROM film WHERE id = :id";

$stmt = $connection->prepare("DELETE FROM film WHERE id= :id");
$stmt->bindParam(':id', $id);
$stmt->execute();



header('location:../index.php');
