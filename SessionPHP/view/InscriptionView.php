<?php ob_start(); ?>
<div class="modal fade" data-backdrop="static" id="inscmodal" tabindex="-1" role="dialog"
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
                        <strong>S'inscrire</strong></h3>
                    <button type="button" class="white-text" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-info">Tout les champs sont obligatoires</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nom">Votre nom : * </label>
                            <input type="text" name="nom" id="nom" class="form-control">
                            <p><small class="text-danger" id="errnom"> </small></p>
                        </div>
                        <div class="form-group">
                            <label for="">Votre prenom : *</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                            <p><small class="text-danger" id="errprenom"> </small></p>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse mail : * </label>
                            <input type="text" name="mail" id="mail" class="form-control">
                            <p><small class="text-danger" id="errmail"> </small></p>
                        </div>
                        <div class="form-group">
                            <label for="pass">Mot de passe : * </label>
                            <small id="passwordHelpInline" class="text-white bg-primary">

                                <ul> Votre mot de passe doit etre composer au minimum de :
                                    <li>8 Caracteres</li>
                                    <li>1 Majuscule</li>
                                    <li>1 Chiffre</li>
                                </ul>
                            </small>
                            <input type="password" name="pass" id="pass" class="form-control">
                            <p><small class="text-danger" id="errpass"> </small></p>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-6">
                            <button type="submit" name="inscription" id="inscription" class="btn btn-lg btn-outline-primary text-uppercase"
                                    value="modifier" disabled>S'inscrire
                            </button>
                            </div>

                            <div class="text-center mb-3 col-6">
                                <button type="submit" name='retour' id='retour' class="btn btn-lg btn-outline-danger text-uppercase">Retour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean();
require('Template.php');
?>
