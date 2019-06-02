<?php

include($_SERVER['DOCUMENT_ROOT'] . '/arborescence/php/cinematheca/.env');

// Create connection

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // sql to create table
    $pays = "CREATE TABLE IF NOT EXISTS pays (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL
    )";

    $role = "CREATE TABLE IF NOT EXISTS role (
    id INTEGER(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL
    )";

    $film = "CREATE TABLE IF NOT EXISTS film (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    pays_id INT UNSIGNED NOT NULL,
    CONSTRAINT fk_pays_id
    FOREIGN KEY (pays_id)
    REFERENCES pays(id)
    )";

    $personne = "CREATE TABLE IF NOT EXISTS personne (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(30) NOT NULL,
    pays_id INT UNSIGNED NOT NULL,
    CONSTRAINT fk_pays
    FOREIGN KEY (pays_id)
    REFERENCES pays(id)
    )";

    $participe = "CREATE TABLE IF NOT EXISTS participe (
    personne_id INT UNSIGNED NOT NULL,
    role_id INT UNSIGNED NOT NULL,
    film_id INT UNSIGNED NOT NULL,
       
    CONSTRAINT fk_personne
    FOREIGN KEY (personne_id)
    REFERENCES personne(id),
    
    CONSTRAINT fk_role
    FOREIGN KEY (role_id)
    REFERENCES role(id),
    
     CONSTRAINT fk_film
    FOREIGN KEY (film_id)
    REFERENCES film(id)
    )";

    // use exec() because no results are returned
    $conn->exec($pays);
    echo "Table pays created successfully";

    // use exec() because no results are returned
    $conn->exec($role);
    echo "Table role created successfully";

    // use exec() because no results are returned
    $conn->exec($film);
    echo "Table film created successfully";

    // use exec() because no results are returned
    $conn->exec($personne);
    echo "Table personne created successfully";

    // use exec() because no results are returned
    $conn->exec($participe);
    echo "Table prticipe created successfully";
    }
catch(PDOException $e)
    {
        echo $pays . "<br>" . $e->getMessage();
    }

    $conn = null;

?>