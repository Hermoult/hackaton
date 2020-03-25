<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil Mme Julien</title>
</head>

<body>
    <h1>VOS IDENTIFIANTS DE CONNEXION</h1>
    <style>
h1 {
    color : white;
    background: green;
    text-indent: 25%;
}
    </style>
    
    <div>
        <form class= "formulaire" method="get" action="controller.php">
        <fieldset>
    <style>
label
{
	display: block;
	width: 55%;
	float: left;
}
div {
    width: 60%;
    margin: auto;
}
    </style>
            <legend>Vos Informations de connexion</legend>
            <style>
legend {
    margin: auto;
}
            </style>
            
            <div class="name">
                <label for="name" >Votre nom</label>
                <input type="text" name="name" id="name" placeholder="nom">
            </div>

            <br />

            <div class="password">
                <label for="password" >Votre mot de passe</label>
                <input type="password" name="password" id="password" placeholder="mot de passe">
            </div>

            <br />

            <div class="identification">
                <label for="identification" >Votre identifiant</label>
                <input type="text" name="infostitre" id="identification" placeholder="identifiant">
            </div>

            <br /> <br /> <br />

                <input class="bouton" type="submit"></input>
            <style>
input {
    margin-left: 45%;
}
            </style>
        </fieldset>
        </form>
        </div>
    
</body>
</html>
