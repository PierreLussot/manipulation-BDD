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

    $nom = 'Boulanger';
    $prenom = 'Gaston';
    $email = 'GastonBoulanger@jourrapide.com';

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

        //echo "Connexion a la base de données réussite ";

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

        /**
         * ici insertion dans la base de données
         */

        /**
         *Pour insérer des données, on va utiliser INSERT INTO nomDeLaTable (NomDesChamps)VALUES('données')
         *Attention a l'ordre rentré des valeurs des tables. 
         *Si on veu inseré plusieurs entré d'un coup il suffit de separé par une virgule les valeur
         *('nom1','prenom1','mail1'),
         *('nom2','prenom2','mail2'),
         *('nom3','prenom3','mail3'),
         *  
         */


        /**
         * ici c'est une insertion avec valeurs rentré manuellement 
         * Qui ne serait jamais faite en pratique, car les valeurs seront rentrées par l'utilisateur via un formulaire 
         */

        // $insertion = "INSERT INTO Visiteurs (nom ,prenom,email)
        //  VALUES ('Douffet','Thibaut','ThibautDouffet@armyspy.com'),
        // ('Mailloux','Gaspar','GasparMailloux@rhyta.com'),
        //('Pouchard','Marie ','MariePouchard@teleworm.fr')";


        /**
         * ici c'est une insertion avec valeurs rentré par l'utilisateur 
         * Don du coup, nous allons préparer nos requêtes, c'est-à-dire les preformaté l'avantage, 
         * c'est de minimiser les injections SQL et risque de faille 
         * et les requêtes s'exécute beaucoup plu rapidement avec une meilleure efficacité 
         * pour les requeté préparé il faut respecter 3 phases 
         *1 La préparation 
         *2 La compilation
         *3 l'exécution
         *
         */

        /**
         * Pour les valeurs, on utilise des marqueurs pour le lier à des variables par la suite. 
         */

        $requete = $connexion->prepare(
            "INSERT INTO Visiteurs(nom,prenom,email)
         VALUES(:nom,:prenom,:email)"
        );

        /**
         *  et là, on utilise les marqueurs dans les valeurs de la requête et les lie aux variables
         *  dans bindParam(':Identifiant', NomDeLaVariable , Type explicite );
         */
        $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindParam(':email', $email, PDO::PARAM_STR);

        $nom = 'testNom';
        $prenom = 'testPrenom';
        $email = 'testEmail@email.fr';

        $requete->execute();

        echo "Valeurs bien insérées a la base de données";
    } catch (PDOException $e) {

        echo "Echec de la connexion: " . $e->getMessage();
    }

    ?>
</body>

</html>