<?php
include_once("model/DiscModel.php");
include_once("model/ArtistModel.php");
include_once("model/UserModel.php");
$nbdiscs = Number_Disc();
$discs = All_Info_Disc();

if(isset($_POST['connexion']))
{
    if(!empty($_POST['mail'])&&!empty($_POST['pass']))
    {
        if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE))
        {

            $info = Info_User($_POST['mail']);
            if(!empty($info))
            {

                if  (password_verify($_POST['pass'], $info[0]->user_pass))
                {


                    $_SESSION['username'] = $info[0]->user_name;

                    $class = 'list-group-item list-group-item-success';

                    $res='Vous etes maintenant connectés';
                    header('refresh:2; url=index.php');
                }
                else
                {
                    $class = 'list-group-item list-group-item-danger';
                    $res='Mot de passe incorrect pour l\'identifiant '.$_POST['mail'].'. Veuillez réessayer';

                }


            }
            else
            {
                $class = 'list-group-item list-group-item-danger';
                $res='Votre adresse mail '.$_POST['mail'].' n\'existe pas dans notre base de donnée. Veuillez réessayer';

            }



        }



    }

    else
    {
        $class = 'list-group-item list-group-item-danger';
        $res='Vous avez surrement tenter de désactiver JavaScript, bravo mais ça ne marche pas ! ';
    }

}
include("view/ConnexionView.php");


