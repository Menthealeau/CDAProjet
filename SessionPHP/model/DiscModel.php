<?php
include_once('ConnexionModel.php');


function All_Info_Disc()
{
    global $db;
    try {
        $req = $db->query('SELECT * FROM disc');
        return $req;
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

function Number_Disc()

{
    global $db;

    try {
        $req = $db->query('SELECT COUNT(disc_id) as nbdisque FROM disc');
        $row = $req->fetch(PDO::FETCH_ASSOC);
        return $row['nbdisque'];
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


}

function Info_Disc($id)
{

    global $db;
    try {

        $requete = $db->prepare("SELECT * FROM disc WHERE disc_id=:id");
        $requete->bindValue(":id", $id);
        $requete->execute();

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

function Update_Disc($id,$titre,$year,$file,$label,$genre,$price,$idart)
{
    global $db;
    try {

        $req = $db->prepare('UPDATE disc SET disc_title = ? , disc_year = ? , disc_picture= ?,disc_label = ? , disc_genre= ?, disc_price = ?, artist_id= ? WHERE disc_id = ?');
        $req->execute(array($titre,$year,$file,$label,$genre,$price,$idart,$id));

    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

function Delete_Disc($id)
{
    global $db;
    try {

        $req=$db->prepare('DELETE FROM `disc` WHERE disc_id= :id');
        $req->bindParam(':id' , $id,PDO::PARAM_INT);
        $req->execute();
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}
function Add_Disc($idart,$price,$year)
{
    try {
        $db = connexion();
        $requete = $db->prepare("INSERT INTO disc () VALUES (NULL,?,?,?,?,?,$price,$idart);");

        $requete->execute(array($_POST['titre'],intval($year),$_FILES['fileains']['name'],$_POST['label'],$_POST['genre']));
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}