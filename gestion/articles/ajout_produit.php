<?php
//session_start();
//if(isset($_SESSION['username']))
{
//{
    ?>

    <div class="panel-body">

        <h2>Fiche nouveau produit fini</h2>
        <hr/>

        <form method="POST" class="form-horizontal form-groups-bordered"
              action="?p=gestion/articles/ajout_produit_confirm.php">


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Reference</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name="reference" class="form-control" type="text"
                           value="<?php if (isset($_POST['reference'])) echo($_POST['reference']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Designation</label>
                <div class="col-sm-5">
                    <input  name="designation" class="form-control" type="text"
                           value="<?php if (isset($_POST['designation'])) echo($_POST['designation']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Puissance</label>
                <div class="col-sm-5">
                    <input  name="puissance" class="form-control" type="text"
                           value="<?php if (isset($_POST['puissance'])) echo($_POST['puissance']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Couleur</label>
                <div class="col-sm-5">
                    <input  name="couleur" class="form-control" type="text"
                           value="<?php if (isset($_POST['couleur'])) echo($_POST['couleur']); ?>"/>
                </div>
            </div>

            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Qtt par Carton</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name="qtt_carton" class="form-control" type="text"
                           value="<?php if (isset($_POST['qtt_carton'])) echo($_POST['qtt_carton']); ?>"/>
                </div>
            </div>


            <fieldset class="scheduler-border">
                <legend class="scheduler-border"></legend>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Categorie</label>
                    <div class="col-sm-5">
                        <select class="form-control select2" id="_articles_categorie" name="_articles_categorie">
                            <option></option>
                            <?php
                            $req = mysqli_query($link, "SELECT * FROM articles_categorie");
                            while ($rs = mysqli_fetch_array($req)) { ?>
                                <option value="<?php echo utf8_encode($rs["id"]) ?>"><?php

                                    echo utf8_encode($rs["description"])
                                    ?></option>
                            <?php } ?>
                            <br>
                        </select>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-sm-1"></div>
                    <label for="field-2" class="col-sm-3 control-label">Ajout +</label>
                    <div class="col-sm-4">
                        <input autocomplete="off" name="_articles_categorie_new" class="form-control" type="text"
                               value="<?php if (isset($_POST['_articles_categorie_new'])) echo($_POST['_articles_categorie_new']); ?>"/>
                    </div>

                </div>
            </fieldset>
            <hr>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">

                    <button type="submit" name="submit" class="btn btn-success">Ajouter Produit +</button>

                </div>
            </div>
        </form>
    </div>



    <?php


}
//else
  //  header("Location:../login.php");

?>

