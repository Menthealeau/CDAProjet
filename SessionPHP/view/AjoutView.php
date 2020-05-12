<?php ob_start(); ?>


    <div class="col-12 pt-5 mt-3">
        <div class="<?php if (isset($class)) {
            echo htmlspecialchars($class);
        } ?> "><?php if (isset($texte)) {
                echo htmlspecialchars($texte);} ?></div>
        <h1>Ajouter un vinyle</h1>

        <form action="" method="post" ENCTYPE="multipart/form-data">
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" name="titre" id="titre" value="<?php if (isset($titre)) {
                    echo htmlspecialchars($titre);
                } ?>">
                <div class="text-danger"><small><?php if(isset($errtitre)){echo htmlspecialchars($errtitre);}?></small></div>
            </div>
            <div class="form-group">
                <label for="Artist">Artist</label>
                <select class="custom-select mr-sm-2" name='artist' id="artist">
                    <option value="" <?php if (isset($artist) && $artist === '') {
                        echo htmlspecialchars( 'selected');
                    } ?>>
                        Choisissez...
                    </option>

                    <?php foreach ($names as $ligne) { ?>
                        <option value="<?= $ligne->artist_name ?>" <?php if (isset($artist) && $artist === $ligne->artist_name) {
                            echo htmlspecialchars( 'selected');
                        } ?>>
                            <?= $ligne->artist_name ?></option>
                        <?php
                    }
                    ?>

                </select>
                <div class="text-danger"><small><?php if(isset($errartist)){echo htmlspecialchars($errartist);}?></small></div>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" value="<?php if (isset($year)) {
                    echo htmlspecialchars( $year);
                } ?>">
                <div class="text-danger"><small><?php if(isset($erryear)){echo htmlspecialchars($erryear);}?></small></div>
            </div>
            <div class="form-group">
                <label for="Genre">Genre</label>
                <input type="text" class="form-control" name="genre" id="genre" value="<?php if (isset($genre)) {
                    echo htmlspecialchars($genre);
                } ?>">
                <div class="text-danger"><small><?php if(isset($errgenre)){echo htmlspecialchars($errgenre);}?></small></div>
            </div>
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" class="form-control" name="label" id="label" value="<?php if (isset($label)) {
                    echo htmlspecialchars($label);
                } ?>">
                <div class="text-danger"><small><?php if(isset($errlabel)){echo htmlspecialchars($errlabel);}?></small></div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="<?php if (isset($price)) {
                    echo htmlspecialchars($price);
                } ?>">
                <div class="text-danger"><small><?php if(isset($errprix)){echo htmlspecialchars($errprix);}?></small></div>
            </div>
            <div class="form-group">

                <input type="file" class="form-control-file" name="fileains" id="fileains" accept="image/png, image/jpeg, image/jpg">
                <div class="text-danger"><small><?php if(isset($errfile)){echo htmlspecialchars($errfile);}?></small></div>
            </div>
            <button type="submit" name ='envoi' class="btn btn-primary">Envoyer</button>
            <button type="submit" class="btn btn-dark ml-2" name="retour" value="retour">Retour</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
require('Template.php'); ?>