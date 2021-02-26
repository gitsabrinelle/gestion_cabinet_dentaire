<h2>Fiche de regalges du logiciel </h2>
<h4>ne modifier pas les reglages sans avoir une formation  !!</h4>
<div class="panel-body">
    <?php
    $action = "?p=gestion/reglages/edit_reglages_confirm.php";
    $req = mysqli_query($link, "select * from reglages ");
    $num = mysqli_num_rows($req);

    if ($num) {
        while ($row = mysqli_fetch_array($req)) {
            ?>
            <form role="form" class="form-horizontal form-groups-bordered" method="POST"
                  action="<?php echo $action;?>">
                <hr>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">marge %</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="marge" type="text" class="form-control"
                               value="<?php echo($row['marge']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">tva %</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="tva" type="text" class="form-control"
                               value="<?php echo($row['tva']); ?>"/>
                    </div>
                </div>



                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">stock fictif séparé  </label>
                    <div class="col-sm-5">
                        <input  class="form-control" name="facturation" type="checkbox" <?php if(!empty( $row['facturation'])){ ?>checked="checked"<?php } ?>>

                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Type d'articles a vendre </label>

                    <div class="col-sm-5">

                        <select class="form-control" name="prix_calcul">
                            <option value="montage">Montage (gestion des produits finis et les pieces composantes )</option>
                            <option value="simple">Produit finis uniquement (vente en details et gros )</option>
                            <option value="prod">Production (gestion des produits finis et les  pieces composantes )</option>
                            <option value="tout">Montage et Production </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Méthode de choix du prix de vente </label>
                    <div class="col-sm-5">

                        <select class="form-control" name="prix_calcul">

                            <option value="y">Progressif /  Fifo  (Déclarations impots Réels) </option>
                            <option selected value="<?php echo $row['prix_calcul']?>">Forfaitaire / ( Lifo )</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Identifiant du logiciel (pour les mises a jour)</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="reference" class="form-control" type="text"
                               value="<?php echo($row['reference']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary mb-4"  data-loading-text="Modification en cours ...">Modifier
                        </button>
                    </div>
                </div>
            </form>
            <?php
        }
    }
    ?>

</div>
