<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="controller.php" method="POST">
        <fieldset>
            <legend>Formulaire</legend>
            <div>
                <label for="nameinput">name</label>
                <input type="text" name="name" id="nameinput">
            </div>
            <div>
                <label for="idinput">identification</label>
                <input type="text" name="identification" id="idinput">
            </div>
            <div>
                <label for="passwordinput">password</label>
                <input type="password" name="password" id="passwordinput">
            </div>
            <div>
                <label><input type="checkbox" name="cgu" required checked>J'accepte les conditions d'utilisations</label>
            </div>
            <input type="submit" value="Envoyer">
            <input type="reset" value="Annuler">
        </fieldset>
    </form>
</body>
</html>