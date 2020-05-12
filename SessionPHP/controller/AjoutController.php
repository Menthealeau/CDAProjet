<?php
require 'model/DiscModel.php';
require 'model/ArtistModel.php';

$names = All_Names_Artist();

if(isset($_POST['envoi'])) //Si on clique sur le bouton envoyer
{
    extract($_POST, EXTR_SKIP); // on transforme tout les 'name' des inputs en variables

    /* On test les données saisies une a une */

    if(!preg_match('/^[12][0-9]{3}$/',$year)) //year doit etre une année comprise entre 1000 et 2999
    {
        $erryear = 'Ce n\'est pas une année réaliste, veuillez entrer une année';
    }
    if($year ==='')
    {
        $erryear = 'Veuillez saisir l\'année de parution du vinyle';
    }
    if(floatval($price)==0) //on doit pouvoir convertir le price par un float
    {
        $errprix = 'La valeur rentrée ne correspond pas a un prix, veuillez écrire un montant correct';
    }
    if($price==='')
    {
        $errprix = 'Veuillez saisir le prix du vinyle';
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
        if(!preg_match('/^[A-Z][a-z]+([,\s][A-Z][a-z]+)*$/',$genre)) //Le(s) genre(s) doivent commencer par une Majuscule , si plusieur séparer par une virgule ou espace
        {
            $errgenre = 'Afin de renseigner un genre, veuillez ecrire la premiere lettre en Majuscule le reste en minuscule et séparer les genre par avec une "," ou un espace. Exemple : "Rap,Pop Rock"';
        }
    }
    if($label ==='')
    {
        $errlabel ='Veuillez renseigner le label qui à produit ce nouvel album';
    }
    if($artist==='')
    {
        $errartist ='Veuillez selectionner un artiste parmis la liste';
    }
    /*
     * Explication vérification dossier
     */

    if ($_FILES['fileains']['name'] ==='')
    {

        $errfile = 'Veuillez mettre une photo du vinyle que vous souhaitez renseignez';
    }
    else
    {
        if(preg_match('/(jpg|png|jpeg)$/i',$_FILES['fileains']['name'])) // le dossier a insere doit etre une photo , on verifie les formats
        {
            if(!file_exists("../assets/img/".$_FILES['fileains']['name'])) // on vérifie que le fichier n'existe pas deja dans notre dossier img
            {
                if (is_uploaded_file($_FILES['fileains']['tmp_name'])) //on vérifie que le telechargement du fichier dans le dossier tmp c'est bien effectué
                {
                    if (move_uploaded_file($_FILES['fileains']['tmp_name'], __DIR__.'/../../SessionPHP/assets/img/'. $_FILES['fileains']['name'])) { // si oui, on change le fichier dans notre dossier img

                        $file = $_FILES['fileains']['name']; //on indique le nom du fichier dans la variable $file pour l'ajout
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
            $errfile.= 'Votre fichier : '.$_FILES['fileains']['name'];
        }
    }

    /* Fin des tests de données  */

}
if(isset($_POST['retour']))
{
    header('location: index.php');
}



if(isset($artist))
{

    if(!isset($erryear)&&!isset($errprix)&&!isset($errtitre)&&!isset($errgenre)&&!isset($errlabel)&&!isset($errfile)) // Si il n'y a aucune erreur
    {

        $id = Id_Artist($artist); // on recupere l'id de l'artiste

        $res = Add_Disc($id,intval($price),intval($year)); //on execute la requete d'ajout de AddCdModel.php

        if(is_null($res)) //si il n'y a pas d'erreur
        {

            $class = 'list-group-item list-group-item-success';
            $texte = 'Votre Vinyle à été ajouter';
        }
        else //sinon
        {

            $class = 'list-group-item list-group-item-danger';
            $texte = 'Erreur lors de l\'ajout du Vinyle';
        }

    }

}




require('view/AjoutView.php');