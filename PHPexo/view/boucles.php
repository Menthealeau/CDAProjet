<?php
include("header.php");
?>
<div class="col-12 mt-3">
    <h4>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... : </h4>

    <?php
    impair();
    ?>
</div>
<div class="col-12 mt-3">
    <h4>Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers:</h4>
    <div class="col-6">
    <textarea class="form-control" rows="10" readonly>
    <?php
    xfois();
    ?>
    </textarea>
    </div>
</div>
<div class="col-12 mt-3">
    <h4>Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML</h4>
    <table border="1">
        <?php
        tableaumultip();
        ?>

    </table>
</div>
<?php
include("footer.html");
?>
