<!DOCTYPE html>
<html>
<!-- Page template qui vas englober toutes les view du site -->

<head>  <!-- Debut du header principal du site pour notament charger les fichiers bootstrap ainsi que les css-->
    <meta charset="utf-8" />
     <!-- La variable $title est dynamique, elle change selon le controller selectionner -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<nav id="navbar-example2" class="navbar navbar-primary fixed-top bg-dark">
    <a class="navbar-brand text-info" href="index.php">
        <i class="fas fa-home">Velvet Music</i>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    if(isset($_SESSION['username']))
    {
        ?>

    <ul class="nav nav-pills mr-5">
        <li class="nav-item dropdown text-center">
            <a class="nav-link dropdown-toggle text-info" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-address-card" > <?= $_SESSION['username'] ?></i></a>
                <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item text-dark" href="index.php?action=ajout"><strong> Ajouter un CD </strong></a>
                    <div class="dropdown-divider " style="border-color:red;"> </div>
                    <a class="dropdown-item bg-danger text-white" href="index.php?action=dc"> <svg class="bi bi-box-arrow-in-left" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.854 11.354a.5.5 0 000-.708L5.207 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 00-.5-.5h-9a.5.5 0 000 1h9A.5.5 0 0015 8z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M2.5 14.5A1.5 1.5 0 011 13V3a1.5 1.5 0 011.5-1.5h8A1.5 1.5 0 0112 3v1.5a.5.5 0 01-1 0V3a.5.5 0 00-.5-.5h-8A.5.5 0 002 3v10a.5.5 0 00.5.5h8a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V13a1.5 1.5 0 01-1.5 1.5h-8z" clip-rule="evenodd"/>
                        </svg> Déconnexion

                    </a>
                </div>
        </li>
    </ul>
        <?php
    }
    else
    {
        ?>
    <form action="" method="get" class="form-inline">
        <input type="submit" name="action" class="btn btn-danger" value="Connexion">
    </form><?php
    }
    ?>
</nav>
<div class="container-fluid pt-5 mt-3 pagecontent">

<?= $content ?>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php if(isset($js)){?><script type="text/javascript" src="assets/js/<?= $js; ?>.js"></script><?php } ?>
</body>
</html>