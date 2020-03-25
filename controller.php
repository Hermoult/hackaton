<?php
if (!(isset ($_GET['Envoyer']))){

    $name=htmlspecialchars($_GET['name']);
    $password=htmlspecialchars($_GET['password']);
    $identification=htmlspecialchars($_GET['identification']);
            //On récupère les valeurs entrées par l'utilisateur :
    if(($val = read($pseudo, $password, $identification)) == -1){
        echo "User not found";
        echo "password incorrect";
        echo "identification incorrect"; // Erreur écrite
    }
        echo $val['password'];
        echo $val['identification'];
        echo $val['name'];
        
}
    function read($pseudo){
        // on se connecte a la base
        $DB_NAME = "hackaton1"; //database_name
        $DB_DSN = "mysql:host=127.0.0.1:3308;dbname=".$DB_NAME; //database_datasourcename
        $DB_USER = "root"; //database_user
        $DB_PASSWORD = ""; //database_mot_de_passe
        try {
            $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
            $query= $bdd->prepare("SELECT name, password, identification FROM user WHERE identification=:identifiant_num AND name=:name AND password=:validation_key"); // verifie que les données rentrées sont bonnes par rapport à la bdd
            $query->execute(array(':identification_num' => $identification, ':name' => $name, ':validation_key' => $password)); // Exécute une requête préparée
            $val = $query->fetch(); // recupere les valeurs preparées
            if($val == null){
                $query->closeCursor();  // Ferme le curseur, permettant à query d'être de nouveau exécuté
                return (-1);
            }
            $query->closeCursor();
            echo 'success !' , '<br>';
            return ($val);
        } catch (PDOException $e) {
    }
}
?>