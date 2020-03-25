<?php
    session_start();

    if (!(isset($_GET['Envoyer']))){

        $name=htmlspecialchars($_GET['name']);
        $password=htmlspecialchars($_GET['password']);
        $identification=htmlspecialchars($_GET['identification']);
            //On récupère les valeurs entrées par l'utilisateur :
            
        if(($val = read($name, $password, $identification)) == -1){
            header('Location: ./index.php');
        }
        // utilisation des cookies

        if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
            unset($_COOKIE['name']);
            setcookie('name', '', time() -10);
        }
        if (!empty($_COOKIE['name'])) {
            $name = $_COOKIE['name'];
        }
        if (!empty($_GET['name'])) {
            setcookie('name', $_GET['name']);
        }
        if (!empty($_COOKIE['password'])) {
            $password = $_COOKIE['password'];
        }
        if (!empty($_GET['password'])) {
            setcookie('password', $_GET['password']);
        }
        if (!empty($_COOKIE['identification'])) {
            $identification = $_COOKIE['identification'];
        }
        if (!empty($_GET['identification'])) {
            setcookie('identification', $_GET['identification']);
        }
}

    function read($name, $password, $identification){
        // on se connecte a la base
        $DB_NAME = "hackaton1"; //database_name
        $DB_DSN = "mysql:host=127.0.0.1:3308;dbname=".$DB_NAME; //database_datasourcename
        $DB_USER = "root"; //database_user
        $DB_PASSWORD = ""; //database_mot_de_passe
        try {
            $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
            $query= $bdd->prepare("SELECT name, identifiant_num , validation_key FROM user WHERE name=:name AND identifiant_num=:identifiant_num AND validation_key=:validation_key"); // verifie que les données rentrées sont bonnes par rapport à la bdd
            $query->execute(array(':name' => $name, ':identifiant_num' => $identification, ':validation_key' => $password)); // Exécute une requête préparée
            $val = $query->fetch(); // recupere les valeurs preparées
            if($val == null){
                $query->closeCursor();  // Ferme le curseur, permettant à query d'être de nouveau exécuté
                return (-1);
            }
            $query->closeCursor();
            return ($val);
        } catch (PDOException $e) {
    }
}
?>