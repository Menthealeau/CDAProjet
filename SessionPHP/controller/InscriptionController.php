<?php
include('model/UserModel.php');

$js = 'inscription'; //on defini le fichier JS a appeler dans Template.php

if(isset($_POST['retour']))
{
    header('location: index.php?action=Connexion');


}
if(isset($_POST['inscription']))
{


    extract($_POST, EXTR_SKIP);
    if(!empty($nom) && !empty($prenom) && !empty($mail) && !empty($pass))
    {
        $class = 'list-group-item list-group-item-danger';
        if(!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/',$nom))
        {

        $res.= '- le nom'.$nom.' est incorrect, il ne dois pas contenir de chiffre \n';

        }
        if(!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/',$nom))
        {
                $res.= '- le prenom'.$prenom.' est incorrect, il ne dois pas contenir de chiffre \n';
        }
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE))
        {
            $res.= '- l\'adresse email'.$mail.' est incorrecte, veuillez rentrer une adresse email valide \n';
        }
        if(strlen($pass)>=8)
        {
            $num = false;
            $maj =false;

            for($i=0;$i<strlen($pass);$i++)
            {
                if(ctype_digit($pass[$i]))
                {
                    $num = true;
                }
                if(ctype_upper($pass[$i]))
                {
                    $maj= true;
                }

            }

            if(!$num || !$maj)
            {
                $res .= '- Mot de passe incorrect, il dois contenir au moins une majuscule, 1 chiffre et dois faire au moins 8 caracteres \n';
            }


        }
        if(!isset($res))
        {
            $passecure = password_hash($pass, PASSWORD_DEFAULT);
            $insc = Add_User($nom,$prenom,$mail,$passecure);
            var_dump($insc);

            if(is_null($insc))
            {
                $class = 'list-group-item list-group-item-success';
                $res = 'inscription réussite, retour sur la page de connexion dans 2 secondes';
                header('refresh:2; url = index.php?action=Connexion');

            }

        }

    }
    else
    {
        $class = 'list-group-item list-group-item-danger';
        $res = "veuillez remplir tout les champs s'il vous plait";
    }

}


include('view/InscriptionView.php');