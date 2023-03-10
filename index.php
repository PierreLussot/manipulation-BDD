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

        /***********************************1 CREATION BDD*************************************************** */
        /**
         *Pour cree une base de données via php dans un premier temp enlever dbname=$nameDb
         *Vu que l'on ne souhaite plus se connecter à une base de données, mais la crée
         *puis on utilise un méthode exec() qui va nous permettre d'envoyer des instructions SQL 
         *https://sql.sh/cours/create-database
         */



        /**
         * ici creation de la base de données
         */

        // $codeSqlCreationBdd = "CREATE DATABASE test2"; 


        // $connexion->exec($codeSqlCreationBdd);

        // echo "base de données créée";

        /***********************************2 CREATION TABLE*************************************************** */

        /**
         *ici creation de la table 
         *https://sql.sh/cours/create-table
         */

        // $codeSqlCreationTable = 'CREATE TABLE Visiteurs(
        // id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        // nom VARCHAR(50),
        // prenom VARCHAR(50),
        // email VARCHAR(70)
        // )';

        // $connexion->exec($codeSqlCreationTable);

        // echo "table Visiteur créée";

        /*******************************3 CREATION DE NOUVELLE COLONE BDD************************************** */

        /**
         *Pour ajouter une colone ALTER TABLE nomTable ADD nomColonne TypeColonne(taille)
         *https://sql.sh/cours/alter-table
         */

        // $codeSqlAjoutColone = "ALTER TABLE Visiteurs ADD age INT(100)";

        // $connexion->exec($codeSqlAjoutColone);

        // echo "table ajouter";

        /******************************* 4 INSERTION BDD ******************************************************* */

        /**
         *Pour insérer des données, on va utiliser INSERT INTO nomDeLaTable (NomDesChamps)VALUES('données')
         *Attention a l'ordre rentré des valeurs des tables. 
         *Si on veu inseré plusieurs entré d'un coup il suffit de separé par une virgule les valeur
         *('nom1','prenom1','mail1'),
         *('nom2','prenom2','mail2'),
         *('nom3','prenom3','mail3'), 
         *https://sql.sh/cours/insert-into
         */


        /**
         *ici c'est une insertion avec valeurs rentré manuellement 
         *Qui ne serait jamais faite en pratique, car les valeurs seront rentrées par l'utilisateur via un formulaire 
         */

        // $insertion = "INSERT INTO Visiteurs (nom ,prenom,email)
        // VALUES ('Douffet','Thibaut','ThibautDouffet@armyspy.com'),
        // ('Mailloux','Gaspar','GasparMailloux@rhyta.com'),
        // ('Pouchard','Marie ','MariePouchard@teleworm.fr')";


        /**
         *ici c'est une insertion avec valeurs rentré par l'utilisateur 
         *Don du coup, nous allons préparer nos requêtes, c'est-à-dire les preformaté l'avantage, 
         *c'est de minimiser les injections SQL et risque de faille 
         *et les requêtes s'exécute beaucoup plu rapidement avec une meilleure efficacité 
         *pour les requeté préparé il faut respecter 3 phases 
         *1 La préparation 
         *2 La compilation
         *3 l'exécution
         */

        /**
         * Pour les valeurs, on utilise des marqueurs pour le lier à des variables par la suite. 
         */

        // $requete = $connexion->prepare(
        // "INSERT INTO Visiteurs(nom,prenom,email,sexe,age)
        // VALUES(:nom,:prenom,:email,:sexe,:age)"
        // );

        /**
         *et là, on utilise les marqueurs dans les valeurs de la requête et les lie aux variables
         *dans bindParam(':Identifiant', NomDeLaVariable , Type explicite );
         */

        // $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        // $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        // $requete->bindParam(':email', $email, PDO::PARAM_STR);
        // $requete->bindParam(':sexe', $sexe, PDO::PARAM_STR);
        // $requete->bindParam(':age', $age, PDO::PARAM_STR);


        // $nom = 'Doyon';
        // $prenom = 'Lucille  ';
        // $email = 'LucilleDoyon@dayrep.com';
        // $sexe = 'F';
        // $age = 24;

        /**
         * J'utilise trim() pour supprimer les espaces superflus pour ne pas surcharger la base de données. 
         */

        // $nom = trim($nom);
        // $prenom = trim($prenom);
        // $email = trim($email);
        // $sexe = trim($sexe);
        // $age = trim($age);



        // $requete->execute();

        // echo "Valeurs bien insérées a la base de données";

        /*********************************** 5 SELECTION DE DONNEES DANS UNE BDD*************************************************** */

        /**
         *Pour affiché les données stocker dans ma base de données, je prépare ma requête 
         *Ici, je sélectionne toutes les colonnes (id/nom/prenom/email) dans la table Visiteur
         *il y a aussi des conditions avec WHERE = 'nomColonne' 
         *Si on veut rajouter une autre condition pour admettons un âge inférieur à 25 on utilise AND
         *ATTENTION respecté WHERE suivi de AND et non l'inverse AND WHERE sinon erreur fatale
         *https://sql.sh/cours/select
         */

        // $requete = $connexion->prepare("
        // SELECT prenom FROM Visiteurs WHERE sexe = 'H' AND age < 25");

        /**
         *Si on veut un ordre selon l'âge croissant il faudra rajouter ORDER BY nomColonne 
         */

        //$requete = $connexion->prepare("
        // SELECT * FROM Visiteurs  ORDER BY age  ");

        /**
         *Si on veut un ordre selon l'âge decroissant il faudra rajouter  DESC a la fin
         */

        // $requete = $connexion->prepare("
        // SELECT * FROM Visiteurs  ORDER BY age DESC");

        /**
         *J'exécute la requête. 
         */

        // $requete->execute();

        /**
         *Puis on demande d'afficher les résultats.
         *Pour cela, on utilise fetchAll() qui signifie tout renvoyé 
         *comme fetchAll() renvoi un type tableau on l'affiche avec  print_r();
         */

        // $resultat = $requete->fetchAll();

        /**
         *Puis on demande d'afficher les résultats.
         *Pour cela, on utilise print_r()
         */

        //  echo "<pre>";
        //print_r($resultat);
        //echo "</pre>"; 

        /*********************************** 6 MODIFICATION DE DONNEES  *************************************************** */

        /**
         *Pour modifier on utilise UPDATE nomDeLaTable puis on SET nomColonne WHERE id= numeroId
         *ATTENTION, s'il n'y a pas de condition, cela modifiera tous les ages de la base de données.
         *et on utilise le numéro d'id pour modifier ou supprimer le bon utilisateur, car si on se réfère au nom ou au prénom, 
         *des personnes peuvent posséder le même nom ou prénom du coup l'id fera référence à la bonne personne. 
         *https://sql.sh/cours/update
         */

        /**
         *On ajoute la requête à une variable. 
         */

        //$modification = "UPDATE Visiteurs SET age=25 WHERE id=1";

        /**
         *On prépare la requête. 
         */

        // $requete = $connexion->prepare($modification);

        /**
         *On execute la requête. 
         */

        // $requete->execute();

        // echo "information MAJ";

        /*********************************** 7 SUPPRESION DE DONNEES  *************************************************** */
        /**
         *Pour supprimer, on utilise DELETE FROM nomTable WHERE id= numeroId
         *et on utilise le numéro d'id pour supprimer le bon utilisateur, car si on se réfère au nom ou au prénom, 
         *des personnes peuvent posséder le même nom ou prénom du coup l'id fera référence à la bonne personne. 
         *https://sql.sh/cours/delete
         */

        /**
         *On ajoute la requête à une variable. 
         */

        // $suppresionVisiteur = "DELETE FROM Visiteurs WHERE id=50";

        /**
         *On prépare la requête. 
         */

        // $requete = $connexion->prepare($suppresionVisiteur);

        /**
         *On execute la requête. 
         */

        //  $requete->execute();

        // echo "information supprimer";

        /*********************************** 8 SUPPRESION DE COLONNE  *************************************************** */

        /**
         *Pour suprimmer un colonne dans une base de données on utilise 
         *ALTER TABLE nomDeLatable DROP nomColonne
         *https://sql.sh/cours/alter-table
         */

        /**
         *On ajoute la requête à une variable. 
         */

        // $suppresionColone = "ALTER TABLE Visiteurs DROP test";

        /**
         *On prépare la requête. 
         */

        // $requete = $connexion->prepare($suppresionColone);

        /**
         *On execute la requête. 
         */

        // $requete->execute();

        // echo "colonne supprimer";

        /*********************************** 9 SUPPRESION D'UNE TABLE  *************************************************** */

        /**
         *Pour suprimmer une table DROP TABLE nomDeLaTable
         *https://sql.sh/cours/drop-table
         */

        /**
         *On ajoute la requête à une variable. 
         */

        // $suppresionTable = "DROP TABLE Visiteurs ";

        /**
         *On prépare la requête. 
         */

        // $requete = $connexion->prepare($suppresionTable);

        /**
         *On execute la requête. 
         */

        // $requete->execute();

        // echo "Table supprimer";
        

    } catch (PDOException $e) {

        echo "Echec de la connexion: " . $e->getMessage();
    }

    ?>
</body>

</html>