<?php
/*session_start();
if(isset($_SESSION['username']))
//{*/
{
    ?>

    <div class="panel-body">

        <h2>Fiche nouveau dossier </h2>
        <hr/>

        <form method="POST" class="form-horizontal form-groups-bordered"
              action="?p=gestion/dossiers/ajout_dossier_confirm.php">


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">numero</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name="numero" class="form-control" type="text"
                           value="<?php if (isset($_POST['numero'])) echo($_POST['numero']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">description</label>
                <div class="col-sm-5">
                    <input  name="description" class="form-control" type="text"
                           value="<?php if (isset($_POST['description'])) echo($_POST['description']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Date</label>
                <div class="col-sm-5">
                    <input  name="date" class="form-control" type="date"
                           value="<?php if (isset($_POST['date'])) echo($_POST['date']); ?>"/>
                </div>
            </div>


            <fieldset class="scheduler-border">
                <legend class="scheduler-border"></legend>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Fournisseur</label>
                    <div class="col-sm-5">
                        <select class="form-control select2" id="_fournisseur" name="_fournisseur">
                            <option></option>
                            <?php
                            $req = mysqli_query($link, "SELECT * FROM fournisseurs");
                            while ($rs = mysqli_fetch_array($req)) { ?>
                                <option value="<?php echo utf8_encode($rs["id"]) ?>"><?php

                                    echo utf8_encode($rs["societe"])
                                    ?></option>
                            <?php } ?>
                            <br>
                        </select>
                    </div>
                </div>

            </fieldset>
            <hr>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">

                    <button type="submit" name="submit" class="btn btn-success">Ajouter dossier +</button>

                </div>
            </div>
        </form>
    </div>



    <?php


}
/*else
    header("Location:../login.php");
*/
?>

