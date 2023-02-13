<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php & mysql</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "root";
    $pass = "root";
    try {
        /**
         * Pour connecter à la base de données, on utilise l'objet PDO pour cela, on a besoin
         * nom de l'hôte nom de la base de données l'identifiant et mot de passe.
         * (parfois, pour le mot de passe sous window il faudra un champ vide)
         */
        $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
        /**
         * Ici, je gère les erreurs et je fixe le mode d'erreur.
         */
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion a la base de données réussite ";

        /**
         * Pour cree une base de données via php dans un premier temp enlever dbname=$nameDb
         * Vu que l'on ne souhaite plus se connecter à une base de données, mais la crée
         * puis on utilise un méthode exec() qui va nous permettre d'envoyer des instructions SQL 
         */

        /**
         * ici creation de la base de données
         */

        //$codeSqlCreationBdd = "CREATE DATABASE test2";

        /**
         * ici creation de la table
         */

        //  $codeSqlCreationTable = 'CREATE TABLE Visiteurs(
        //    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     nom VARCHAR(50),
        //     prenom VARCHAR(50),
        //     email VARCHAR(70)
        //   )';

        //$connexion->exec($codeSqlCreationTable);

        // echo "table Visiteur créée";
       
    } catch (PDOException $e) {

        echo "Echec de la connexion: " . $e->getMessage();
    }

    ?>
</body>

</html>