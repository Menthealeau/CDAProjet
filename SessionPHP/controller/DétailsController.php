<?php
include_once("model/DiscModel.php");
include_once("model/ArtistModel.php");

$nom = $_GET['nom'];
$info = Info_Disc($_GET['id']);
$title = $info[0]->disc_title;
$displayform1 = 'd-block';
$displayform2 = 'd-none';
$artiste = All_Names_Artist();

if(isset($_POST['envoi']))
{
    if($_POST['envoi']==="modifier")
    {
        $displayform2 = 'd-block';
        $displayform1 = 'd-none';
    }
    if($_POST['envoi']==="accmodif")
    {
        extract($_POST, EXTR_SKIP);
        $displayform2 = 'd-block';
        $displayform1 = 'd-none';
        if(!preg_match('/^[12][0-9]{3}$/',$year))
        {
            $erryear = 'Ce n\'est pas une année, veuillez entrer une année';
        }
        if(floatval($price)==0)
        {
            $errprix = 'La valeur rentrée ne correspond pas a un prix, veuillez écrire un montant correct';
        }
        if($titre==='')
        {
            $errtitre = 'Le Titre du nouvel album doit etre renseigné';
        }
        if($genre ==='')
        {
            $errgenre = 'Le genre de musique doit etre renseigné';
        }
        else
        {
            if(!preg_match('/^[A-Z][a-z]+([,\s][A-Z][a-z]+)*$/',$genre))
            {
                $errgenre = 'Afin de renseigner un genre, veuillez ecrire la premiere lettre en Majuscule le reste en minuscule et séparer les genre par avec une "," ou un espace. Exemple : "Rap,Pop Rock"';
            }
        }
        if($label ==='')
        {
            $errlabel ='Veuillez renseigner le label qui à produit ce nouvel album';
        }
        if ($_FILES['nouveaufile']['name'] ==='')
        {

            $file = $_POST['fileains'];
        }
        else
        {
            if(preg_match('/(jpg|png|jpeg)$/i',$_FILES['nouveaufile']['name']))
            {
                if(!file_exists("../assets/img/".$_FILES['nouveaufile']['name']))
                {
                    if (is_uploaded_file($_FILES['nouveaufile']['tmp_name']))
                    {
                        if (move_uploaded_file($_FILES['nouveaufile']['tmp_name'], __DIR__.'/../../EvalPHP/assets/img/'. $_FILES["nouveaufile"]['name'])) {

                            $file = $_FILES["nouveaufile"]['name'];
                        }
                        else {
                            $errfile =  "Probleme lors du téléchargement de l'image, la taille maximum ne doit pas depasser 10MO";
                        }
                    }

                }
            }
            else
            {
                $errfile = 'Probleme lors du telechargement du fichier. Il doit etre une image de format JPG,PNG,JPEG. <br>';
                $errfile.= 'Votre fichier : '.$_FILES["nouveaufile"]['name'];
            }
        }
        if(!isset($erryear)&&!isset($errprix)&&!isset($errtitre)&&!isset($errgenre)&&!isset($errlabel)&&!isset($errfile))
        {

            $idart = Id_Artist($artist);
            $modif = Update_Disc($_GET['id'],$titre,$year,$file,$label,$genre,$price,intval($idart));
            if(is_null($modif))
            {

                $class = 'list-group-item list-group-item-success';
                $texte = 'La modificication à été effectuer avec succes, retour a l\'acceuil dans 4 secondes';
                header('refresh:4; url= index.php');
            }
            else
            {

                $class = 'list-group-item list-group-item-danger';
                $texte = 'Erreur lors de la modification du Vinyle';
            }


        }
    }
    if($_POST['envoi']==="supprimer")
    {
        $supp= Delete_Disc($info[0]->disc_id);
        if(is_null($supp))
        {
            $class = 'list-group-item list-group-item-success';
            $texte = 'Adieu petit vinyle, retour a l\'acceuil dans 3 secondes';
            $disable = 'disabled';
            header('refresh:3; url= index.php');

        }
        else
        {
            $class = 'list-group-item list-group-item-danger';
            $texte = 'Non non il ne veux pas ce supprimer ce coquin';
        }
    }
    if($_POST['envoi']==="retour")
    {
        header('location: #');
    }
}
include ('view/DétailsView.php');