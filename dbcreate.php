 <!-- CODE SQL VANILLA

 CREATE TABLE utilisateur (
     id INT(20) AUTO_INCREMENT PRIMARY KEY,
     prenom VARCHAR(20),
     email VARCHAR(30),
     nom VARCHAR(30)
   );
  
   CREATE TABLE potion (
     id INT(20) AUTO_INCREMENT PRIMARY KEY,
     id_utilisateur INT(20),
     FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
   );
  
   CREATE TABLE ingredients (
     id INT(20) AUTO_INCREMENT PRIMARY KEY,
     nom VARCHAR(20),
     description VARCHAR(50)
   );
  
   CREATE TABLE potion_ingredient (
     id_potion INT(20),
     id_ingredient INT(20),
     PRIMARY KEY (id_potion, id_ingredient
   ); -->



 <?php

    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "votre_nom_base_de_donnees";

    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Création de la base de données
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === true) {
        echo "La base de données a été créée avec succès. <br>";
    } else {
        echo "Erreur lors de la création de la base de données : " . $conn->error;
    }

    // Sélectionner la base de données
    $conn->select_db($dbname);

    // Création de la table utilisateur
    $sql = "CREATE TABLE utilisateur (
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(20),
    email VARCHAR(30),
    nom VARCHAR(30)
)";
    if ($conn->query($sql) === true) {
        echo "La table 'utilisateur' a été créée avec succès. <br>";
    } else {
        echo "Erreur lors de la création de la table 'utilisateur' : " . $conn->error;
    }

    // Création de la table potion
    $sql = "CREATE TABLE potion (
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT(20),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
)";
    if ($conn->query($sql) === true) {
        echo "La table 'potion' a été créée avec succès. <br>";
    } else {
        echo "Erreur lors de la création de la table 'potion' : " . $conn->error;
    }

    // Création de la table ingredients
    $sql = "CREATE TABLE ingredients (
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(20),
    description VARCHAR(50)
)";
    if ($conn->query($sql) === true) {
        echo "La table 'ingredients' a été créée avec succès. <br>";
    } else {
        echo "Erreur lors de la création de la table 'ingredients' : " . $conn->error;
    }

    // Création de la table potion_ingredient
    $sql = "CREATE TABLE potion_ingredient (
    id_potion INT(20),
    id_ingredient INT(20),
    PRIMARY KEY (id_potion, id_ingredient)
)";
    if ($conn->query($sql) === true) {
        echo "La table 'potion_ingredient' a été créée avec succès. <br>";
    } else {
        echo "Erreur lors de la création de la table 'potion_ingredient' : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();

    ?>