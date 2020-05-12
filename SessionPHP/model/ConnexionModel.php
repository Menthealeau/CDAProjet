<?php
function connexion() //fonction de connexion a la bdd
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=record;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
$db = connexion();