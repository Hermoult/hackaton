<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
    <header class="vbox">
<style>
header {
    background-color: green;
    color: white;
    text-align: center;
}
.vbox 
{
    display: flex;
    flex-flow: column nowrap;
}

.vbox > * 
{
    margin-bottom: 5%;
}

.vbox > *:last-child 
{
    margin-bottom: 0;
}

.hbox 
{
    display: flex;
    flex-flow: row wrap;
}

.hbox > * 
{
    margin-right: 5%;
}

.hbox > *:last-child 
{
    margin-right: 0;
}

.hbox > .fluid,

.vbox > .fluid 
{
    flex-grow: 1;
}

header.vbox 
{
    min-height: 100%;
}

header.vbox nav 
{
    margin: 0;
}

ul.hbox 
{
    background: white;
    list-style-type: none;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    width: 100pix;
    height: 50pix;
}
body {
    background-color: green;
}

</style>
        <h1>Accueil</h1>
        <nav>
            <ul class="hbox">
                <li class="fluid"><a href="owner1.php">1 Mr Schylowski</a></li>
                <li class="fluid"><a href="owner2.php">2 Mme Orlando</a></li>
                <li class="fluid"><a href="owner3.php">3 Mr Petrov </a></li>
                <li class="fluid"><a href="owner4.php">4 Mme Julien</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
<?php
    if (!empty($_COOKIE['name'])) {
        $nom=$_COOKIE['name'];
    }
    if ($nom){    
        echo 'Bonjour Mr/Mme ' . $nom .', vous etes identifié, en attente des autres connexions...';
    }
?>