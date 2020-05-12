<?php
include_once('ConnexionModel.php');

function All_Info_Artist() {
    global $db;
    try {
        $req = $db->query('SELECT * FROM artist');
        return $req;
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }



}

function All_Names_Artist ()
{
    global $db;

    try {

        $req = $db->query('SELECT artist_name FROM artist');
        return $req->fetchAll(PDO::FETCH_OBJ);

    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

function Name_Artist($id)
{
    global $db;
    try {
        $req = $db->prepare('SELECT artist_name FROM artist WHERE artist_id = :id');
        $req->bindParam(':id' , $id);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);
        $name = $row['artist_name'];
        return $name;

    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

function Id_Artist($name)
{
    global $db;
    try {

        $req = $db->prepare('SELECT artist_id FROM artist WHERE artist_name = :name');
        $req->bindParam(':name' , $name,PDO::PARAM_STR);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);
        $id = $row['artist_id'];
        return $id;
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

