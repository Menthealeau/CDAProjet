<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Exo PHP</title>

</head>
<body>
<?php include_once('../controller/functions.php');?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Exercice PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Acceuil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="boucles.php">Conditionnelles et boucles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tableau.php">tableaux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fonctions.php">fonctions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="date.php">Date et heures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manip.php">Manip fichiers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form.php">Serv et form</a>
            </li>
        </ul>
    </div>
</nav>

