<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="controller.php" method="GET" id="form">
        <div class="name">
            <label for="name">name</label> 
            <input type="text" name="name" id="name" placeholder="Nom">
        </div>
        <div class="password">
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="******">
        </div>
        <div class="identification">
            <label for="identification">Numéro identification</label> 
            <input type="text" name="identification" id="identification" placeholder="Rentrez id">
        </div>
        <div class="submit">
            <input type="submit">
        </div>
    </form>    
</body>
</html>