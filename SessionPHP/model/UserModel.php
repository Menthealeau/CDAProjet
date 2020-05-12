<?php
include_once('ConnexionModel.php');



function Info_User ($mail)

{
    global $db;
    try {

        $requete = $db->prepare("SELECT * FROM user WHERE user_mail = :mail");
        $requete->bindParam(':mail', $mail, PDO::PARAM_STR);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
}

function Add_User($nom,$prenom,$mail,$pass)
{
    global $db;

    try {
        $requete = $db->prepare("INSERT INTO user () VALUES (NULL,?,?,?,?)");
        $requete->execute(array($nom,$prenom,$mail,$pass));
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }



}