<?php ob_start(); ?>
<div class="modal fade" data-backdrop="static" id="mdpoubliemodal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog form-dark" role="document">
        <div class="modal-content card card-image ">
            <div class=" text-center <?php if (isset($class)) {
                echo htmlspecialchars($class);
            } ?> "><?php if (isset($res)) {
                    echo $res;
                } ?></div>
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <!--Header-->
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel">
                        <strong>Mot de passe oublié </strong></h3>
                    <button type="button" class="white-text" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Veuillez renseigner votre adresse mail:</p>
                    <form action="" method="post" class="form-inline-group">
                        <div class="form-group row">
                            <label for="mail" class="col-5 col-form-label">Adresse mail : </label>
                            <div class="col-7">
                            <input type="text" name="mail" id="mail" class="form-control">
                            </div>
                        </div>
                        <p><small class="text-danger" id="errmail"> </small></p>
                        <div class="text-center mb-4 col-6">
                            <button type="submit" name='envoyer' id='envoyer' class="btn btn-lg btn-outline-primary text-uppercase" disabled>Envoyer
                            </button>
                        </div>
                    </form>
                </div>




<?php $content = ob_get_clean();
require('Template.php');
?>
