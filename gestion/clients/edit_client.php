<h2>Fiche de modification d'un client</h2>
<div class="panel-body">
    <?php
    $action = "?p=gestion/clients/edit_client_confirm.php";
    $id = $vars[1];
    $req = mysqli_query($link, "select * from clients where id= '$id'");
    $num = mysqli_num_rows($req);

    if ($num) {
        while ($row = mysqli_fetch_array($req)) {
            ?>
            <form role="form" class="form-horizontal form-groups-bordered" method="POST"
                  action="<?php echo $action; ?>">
                <input name="id" type="hidden" value="<?php echo($id); ?>"/>
                <hr>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">societe</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="societe" type="text" class="form-control"
                               value="<?php echo($row['societe']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">tel</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="tel" type="text" class="form-control"
                               value="<?php echo($row['tel']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Autoriser pour Facturation</label>
                    <div class="col-sm-5">
                        <input  class="form-control" name="is_facturation" type="checkbox" <?php if(!empty( $row['is_facturation'])){ ?>checked=""<?php } ?>>
                    </div>
                </div>


                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Autoriser pour Vente</label>
                    <div class="col-sm-5">
                        <input  class="form-control" name="is_vente" type="checkbox" <?php if(!empty( $row['is_vente'])){ ?>checked=""<?php } ?>>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Calcule de Prix</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="prix">
                            <option selected value="<?php echo($row['prix']); ?>"><?php echo($row['prix']); ?></option>
                            <option value="Prix 1">Prix 1</option>
                            <option value="Prix 2">Prix 2</option>
                            <option value="Prix 3">Prix 3</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Fax</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="fax" class="form-control" type="text"
                               value="<?php echo($row['fax']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="email" class="form-control" type="text"
                               value="<?php echo($row['email']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Adresse de l'activité</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="adresse" type="text" class="form-control"
                               value="<?php echo($row['adresse']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Wilaya</label>
                    <div class="col-sm-5">
                        <select class="form-control select2" name="wilaya" id="wilaya">
                            <option value="<?php echo($row["Wilaya"]) ?>" selected><?php echo $row["Wilaya"] ?></option>
                            <?php
                            $req_wilaya = mysqli_query($link, "SELECT * FROM wilayas ORDER BY code ");
                            while ($rs_wilaya = mysqli_fetch_array($req_wilaya)) { ?>
                                <option value="<?php echo($rs_wilaya["nom"]); ?>"><?php if ($rs_wilaya["code"] < 10)
                                        echo "0" . ($rs_wilaya["code"] . "-" . $rs_wilaya["nom"]);
                                    else
                                        echo($rs_wilaya["code"] . "-" . $rs_wilaya["nom"]) ?></option>
                            <?php } ?>
                            <br>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Commune</label>
                    <div class="col-sm-5">
                        <select class="form-control select2" name="commune" id="commune">
                            <option value="<?php echo($row["Ville"]) ?>" selected><?php echo $row["Ville"] ?></option>
                            <?php
                            $req_commune = mysqli_query($link, "SELECT * FROM communes ORDER BY _wilaya ,`nom` ASC");
                            while ($rs_commune = mysqli_fetch_array($req_commune)) { ?>
                                <option value="<?php
                                echo($rs_commune["nom"]) ?>"><?php
                                    if ($rs_commune["_wilaya"] < 10)
                                        echo "0" . $rs_commune["_wilaya"] . "-" . ($rs_commune["nom"]);
                                    else
                                        echo $rs_commune["_wilaya"] . "-" . ($rs_commune["nom"])
                                    ?></option>
                            <?php } ?>
                            <br>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">N° du Registre Commerce </label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="nrc" class="form-control" type="text"
                               value="<?php echo($row['nrc']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">N° Carte Fiscale </label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="nif" class="form-control" type="text"
                               value="<?php echo($row['nif']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">N° A.I</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="A_I" class="form-control" type="text"
                               value="<?php echo($row['A.I']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">NIS </label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="nis" class="form-control" type="text"
                               value="<?php echo($row['nis']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">N Compte Bancaire </label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="compte_bancaire" class="form-control" type="text"
                               value="<?php echo($row['compte_bancaire']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">CCP</label>
                    <div class="col-sm-5">
                        <input autocomplete="off" name="ccp" class="form-control" type="text"
                               value="<?php echo($row['ccp']); ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary mb-4"
                                value="Modifier ce candidat"
                                data-loading-text="Modification en cours ...">Modifier
                        </button>
                    </div>
                </div>
            </form>
            <?php
        }
    }
    ?>

</div>
