<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil Mme Julien</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 id="vosid">Bonjour monsieur Pietrov</h1>
    <div>
        <form class= "formulaire" method="get" action="controller.php">
        <fieldset>
            <legend>Vos Informations de connexion</legend>

            <div class="name">
                <label for="name" >NOM</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="password">
                <label for="password" >MOT DE PASS</label>
                <input type="password" name="password" id="password" placeholder="mot de passe" required>
            </div>
            <div class="identification">
                <label for="identification" >IDENTIFIANT (10 caractères)</label>
                <input type="text" name="infostitre" id="identification" autocomplete="pietrov" required>
            <div class="bouton">
                <input type="submit" value="VALIDER"></input>
                </div>
        </fieldset>
        </form>
        </div>
</body>
</html>