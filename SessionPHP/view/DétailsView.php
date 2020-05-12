<?php ob_start(); ?>

<div class="col-12 pt-5 mt-3">
    <div class="text-center <?php if (isset($class)) {
        echo $class;
    } ?> "><?php if (isset($texte)) {
            echo $texte;
        } ?></div>
    <div class="card mt-2">

        <div class="row">
            <aside class="col-4 ">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div><img class="img-fluid" src="assets/img/<?= $info[0]->disc_picture ?>"></div>
                    </div>
                </article>
            </aside>
            <aside class="col-8 mt-5 pt-5">
                <div class="col-12 mt-5 text-center text-white <?= $displayform1 ?> ">
                    <dl class="param param-feature">
                        <dt class="h3"><?= $info[0]->disc_title ?> <span class="badge badge-pill badge-warning ml-3">
		<?= $info[0]->disc_price ?>€/Unité</span></dt>
                        <dd class="h5"><?= $nom ?></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Année de parution :</dt>
                        <dd><?= $info[0]->disc_year ?></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Genre :</dt>
                        <dd><?= $info[0]->disc_genre ?></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Label :</dt>
                        <dd><?= $info[0]->disc_label ?></dd>
                    </dl>

                    <?php if (isset($_SESSION['username'])) {
                        ?>
                        <form action="" method="post">
                            <button type="submit" name='envoi' class="btn btn-lg btn-outline-primary text-uppercase"
                                    value="modifier"<?php if (isset($disable)) {
                                echo $disable;
                            } ?>>Modifier
                            </button>
                            <button type="submit" name='envoi' class="btn btn-lg btn-outline-danger text-uppercase"
                                    value="supprimer"<?php if (isset($disable)) {
                                echo $disable;
                            } ?>>Supprimer
                            </button>
                        </form>
                    <?php } else { ?>
                        <p><i>Pour pouvoir modifier les fichiers, veuillez vous connecter . Pas de compte ? cliquez<a
                                    href="index.php?action=inscription"> ici</a></i></p>
                        <form action="index.php">
                            <button type="submit" name='envoi' class="btn btn-lg btn-outline-danger text-uppercase mb-2"
                                    value="retour"> Retour
                            </button>
                        </form>

                    <?php } ?>


                </div>
                <div class="col-12 pb-3 text-white <?= $displayform2 ?> ">
                    <form action="" method="post" ENCTYPE="multipart/form-data">
                        <fieldset>
                            <legend>Modifier ce CD :</legend>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control" name="titre" id="titre"
                                           value="<?= $info[0]->disc_title ?>">
                                    <p><small class="text-danger"><?php if (isset($errtitre)) {
                                                echo $errtitre;
                                            } ?></small></p>
                                </div>
                                <div class="form-group col-4">
                                    <label for="Artist">Artist</label>
                                    <select class="custom-select mr-sm-2" name='artist' id="artist">
                                        <?php foreach ($artiste as $result) { ?>
                                            <option value="<?= $result->artist_name ?>" <?php if ($nom === $result->artist_name) {
                                                echo 'selected';
                                            } ?>>
                                                <?= $result->artist_name ?></option>
                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="form-group col-4">
                                    <label for="year">Year :</label>
                                    <input type="number" class="form-control" name="year" id="year"
                                           value="<?php if (isset($year)) {
                                               echo $year;
                                           } else {
                                               echo $info[0]->disc_year;
                                           } ?>">
                                    <p><small class="text-danger"><?php if (isset($erryear)) {
                                                echo $erryear;
                                            } ?></small></p>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="Genre">Genre : </label>
                                    <input type="text" class="form-control" name="genre" id="genre"
                                           value="<?php if (isset($genre)) {
                                               echo $genre;
                                           } else {
                                               echo $info[0]->disc_genre;
                                           } ?>">
                                    <p><small class="text-danger"><?php if (isset($errgenre)) {
                                                echo $errgenre;
                                            } ?></small></p>
                                </div>

                                <div class="form-group col-4">
                                    <label for="label">Label</label>
                                    <input type="text" class="form-control" name="label" id="label"
                                           value="<?php if (isset($label)) {
                                               echo $label;
                                           } else {
                                               echo $info[0]->disc_label;
                                           } ?>">
                                    <p><small class="text-danger"><?php if (isset($errlabel)) {
                                                echo $errlabel;
                                            } ?></small></p>

                                </div>
                                <div class="form-group col-4">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           value="<?php if (isset($price)) {
                                               echo $price;
                                           } else {
                                               echo $info[0]->disc_price;
                                           } ?>">
                                    <p><small class="text-danger"><?php if (isset($errprix)) {
                                                echo $errprix;
                                            } ?></small></p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fileains"></label>
                                <input type="file" class="form-control-file" name="nouveaufile" id="nouveaufile"
                                       accept="image/png, image/jpeg, image/jpg">
                                <p><small class="text-danger"><?php if (isset($errfile)) {
                                            echo $errfile;
                                        } ?></small></p>
                            </div>
                            <input type="hidden" name="fileains" value="<?= $info[0]->disc_picture ?>">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="envoi" value="accmodif">Modifier
                                </button>
                                <button type="submit" class="btn btn-dark ml-2" name="envoi" value="retour">Retour
                                </button>

                            </div>
                        </fieldset>
                    </form>
                </div>
        </div>
        </aside>
    </div>
</div>
<p><?php //var_dump($idart);?></p>
<?php
$content = ob_get_clean();
require('Template.php'); ?>
