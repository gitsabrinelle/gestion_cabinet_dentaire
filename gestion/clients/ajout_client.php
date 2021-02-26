<?php
$action   ="?p=gestion/clients/ajout_client_confirm.php";

//session_start();
//if(isset($_SESSION['username']))
//{
{?>
    <hr />


    <h2>Fiche nouveau client</h2>

    <br />

    <div class="panel-body">

        <form method="POST"  class="form-horizontal form-groups-bordered" action = "<?php echo $action;?>">
            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">Societe</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "societe" type = "text" class="form-control" value="<?php if(isset($_POST['societe'])) echo($_POST['societe']); ?>" />
                </div>
            </div>


            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">Prix </label>
                <div class="col-sm-5">
                    <select class="form-control">
                        <option>Prix 1</option>
                        <option>Prix 2</option>
                        <option>Prix 3</option>
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">tel</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "tel" class = "form-control" type = "text" value="<?php if(isset($_POST['tel'])) echo($_POST['tel']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Fax</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "fax" class = "form-control" type = "text" value="<?php if(isset($_POST['fax'])) echo($_POST['fax']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "email" class = "form-control" type = "text" value="<?php if(isset($_POST['email'])) echo($_POST['email']); ?>"/>
                </div>
            </div>
			
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Adresse de l'activité</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "adress" class = "form-control" type = "text" value="<?php if(isset($_POST['adress'])) echo($_POST['adress']); ?>"/>
                </div>
            </div>
			
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Wilaya</label>
				<div class="col-sm-5">
					<select class="form-control select2" id="wilaya" name="wilaya">
						<option></option>
						<?php
						$req_wilaya = mysqli_query($link, "SELECT * FROM wilayas");
						while ($rs_wilaya = mysqli_fetch_array($req_wilaya)) { ?>
							<option value="<?php echo utf8_encode($rs_wilaya["nom"]) ?>"><?php
								if ($rs_wilaya["code"] < 10)
									echo "0" . utf8_encode($rs_wilaya["code"] . "-" . $rs_wilaya["nom"]);
								else
									echo utf8_encode($rs_wilaya["code"] . "-" . $rs_wilaya["nom"])
								?></option>

						<?php } ?>
						<br>
					</select>
				</div>
			</div>

            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">Commune</label>
                <div class="col-sm-5">
                    <select class="form-control select2" name="commune" id="commune">
                        <option></option>
                        <?php
                        $req_commune = mysqli_query($link, "SELECT * FROM communes ORDER BY _wilaya ,`nom` ASC");
                        while ($rs_commune = mysqli_fetch_array($req_commune)) { ?>
                            <option
                                    value="<?php echo utf8_encode($rs_commune["nom"]) ?>"><?php
                                if ($rs_commune["_wilaya"] < 10)
                                    echo "0" . $rs_commune["_wilaya"] . "-" . utf8_encode($rs_commune["nom"]);
                                else
                                    echo $rs_commune["_wilaya"] . "-" . utf8_encode($rs_commune["nom"]);
                                ?></option>
                        <?php } ?>
                        <br>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">N° du Registre Commerce </label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "nrc" class = "form-control" type = "text" value="<?php if(isset($_POST['nrc'])) echo($_POST['nrc']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">N° Carte Fiscale  </label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "nif" class = "form-control" type = "text" value="<?php if(isset($_POST['nif'])) echo($_POST['nif']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">N° ART</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "nart" class = "form-control" type = "text" value="<?php if(isset($_POST['nart'])) echo($_POST['nart']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">NIS </label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "nis" class = "form-control" type = "text" value="<?php if(isset($_POST['wilaya'])) echo($_POST['wilaya']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">N Compte Bancaire </label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "ncb" class = "form-control" type = "text" value="<?php if(isset($_POST['ncb'])) echo($_POST['ncb']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">CCP</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name = "ccp" class = "form-control" type = "text" value="<?php if(isset($_POST['ccp'])) echo($_POST['ccp']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">

                    <button type="submit" name = "submit" class="btn btn-success">Ajouter +</button>

                </div>
            </div>
        </form>
    </div>
<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="assets/js/select2/select2.css">
<script src="assets/js/select2/select2.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>



    <?php


}
//   header("Location:../login.php");

?>

