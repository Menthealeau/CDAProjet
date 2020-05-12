
<?php
session_start();
if(isset($_GET['action']))
{
    if($_GET['action']=='Connexion')
    {
        include('controller/ConnexionController.php');
    }
    if($_GET['action']=='dc')
    {
        unset($_SESSION["login"]);
        unset($_SESSION["role"]);

        if (ini_get("session.use_cookies"))
        {
            setcookie(session_name(), '', time()-42000);
        }

        session_destroy();
        header('location:index.php');
    }
    if($_GET['action']=='Détails')
    {
        include('controller/DétailsController.php');
    }
    if($_GET['action']=='ajout')
    {
        include('controller/AjoutController.php');
    }
    if($_GET['action']=='Inscription')
    {
        include('controller/InscriptionController.php');
    }
    if($_GET['action']=='Oublimdp')

    {
        include('controller/OublimdpController.php');

    }
}
else
{
        include('controller/AcceuilController.php');

}

