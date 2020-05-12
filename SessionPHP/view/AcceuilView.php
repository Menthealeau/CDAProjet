<?php
ob_start(); ?>

<div class="col-12 mr-0 ml-0 pt-5 ">
    <div class="col-12 pt-4 d-flex justify-content-center">
            <div class="row">
            <h1>Liste des disques</h1>
                <h3 class="pl-2"><span class="badge badge-pill badge-primary mt-2">(<?= htmlspecialchars($nbdiscs) ?>)</span></h3>
            </div>
    </div>
    <div class="col-12">
        <div class="row pt-5">

            <?php


            while ($data = $discs->fetch())
            {


                ?>

                    <div class="card text-white mb-3 ml-3" style="width: 18rem;">
                        <img class="card-img-top" id='img' name='img' src="assets/img/<?= htmlspecialchars($data['disc_picture'])?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title" name='titre'><?= htmlspecialchars($data['disc_title'])?></h4>
                            <h5 class="card-title" name="nom"><?= htmlspecialchars(Name_Artist($data['artist_id']))?></h5>
                            <ul class="list-unstyled">
                                <li><p class="card-text" name="label"><strong>Label : </strong><?= htmlspecialchars($data['disc_label'])?></p></li>
                                <li><p class="card-text" name="year"><strong>Year : </strong><?= htmlspecialchars($data['disc_year'])?></p></li>
                                <li><p class="card-text"name="genre"><strong>Genre : </strong><?= htmlspecialchars($data['disc_genre'])?></p></li>
                            </ul>
                            <form action="" method="get">
                                <input type="hidden" name="id" value="<?=htmlspecialchars($data['disc_id']) ?>">
                            <input type="hidden" name="nom" value="<?=htmlspecialchars(Name_Artist($data['artist_id'])) ?>">
                            <input type="submit" name="action" class="btn btn-primary" value="Détails">
                        </div>
                    </div>
                </form>

                <?php
            }
            $discs->closeCursor(); // Ferme la requete sql pour eviter une surchage du serveur
            ?>

        </div>
    </div>







<?php $content = ob_get_clean();
require('Template.php');
?>
