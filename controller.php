<?php
if (!(isset($_POST['Envoyer'])))
{
    // Recup des données du formulaire
    $name=htmlspecialchars($_GET['name']);
    $password=htmlspecialchars($_GET['password']);
    $identification=htmlspecialchars($_GET['identification']);

    // Connexion a la base via PDO
    try {
        $pdo = new PDO('mysql:host=127.0.0.1:3308;dbname=hackaton1', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (\Throwable $th) {
        die('error sql connection');
    } 
    
    // Preparation, envoie de la commande sql et lecture du profil corespondant
    $sql = "SELECT name, identifiant_num , validation_key FROM user WHERE name=:name AND identifiant_num=:identifiant_num AND validation_key=:validation_key";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':name' => $name, ':identifiant_num' => $identification, ':validation_key' => $password)); 
    $donnees = $stmt->fetch();
    
    // Réponse sur le navigateur
    if($donnees==null) {
            echo "Pas de profil correspondant";
    }else {
            echo '<br>'.'Le profil ayant pour pseudo \''. $donnees['pseudo'] . '\' a pour mot de passe \'' . $donnees['password'] . '\', voici sa description : \'' . $donnees['description'] .'\'<br>' ;
    }
}
?>