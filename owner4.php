<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire BDD</title>

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" media="screen and max-width:1280px)" href="petite_resolution.css"/>

</head>

<body>

    <nav>
        <ul>
            <li> <a href="index.html">Accueil</a> </li>
            <li> <a href="index.html">Contact</a> </li>
        </ul>
    </nav>

    <h1>Formulaire</h1>

    <form id="form" action=controller_insertion.php method="POST">

        <br />

        <div>
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name">
        </div>

        <br />
        <br />


        <div>
            <label for="firstname">Votre prénom</label>
            <input type="text" id="firstname" name="firstname">
        </div>

        <br />
        <br />

        <div>
            <label for="password">Votre mot de passe</label>
            <input type="text" id="password" name="password">
        </div>

        <br />
        <br />

        <div>
            <label for="email">Votre email</label>
            <input type="text" id="email" name="email">
        </div>

        <br />
        <br />
        
        <div>
            <input type="submit" value="Envoyer">
        </div>



    </form>


</body>

</html>

