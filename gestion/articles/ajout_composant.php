<?php
/*session_start();
if(isset($_SESSION['username']))*/
//{
{
    ?>

    <div class="panel-body">

        <h2>Fiche nouveau composant </h2>
        <hr/>

        <form method="POST" class="form-horizontal form-groups-bordered"
              action="?p=gestion/articles/ajout_composant_confirm.php">
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
                    <input autocomplete="off" name="designation" class="form-control" type="text"
                           value="<?php if (isset($_POST['designation'])) echo($_POST['designation']); ?>"/>
                </div>
            </div>


            <div class="form-group">
                <label for="field-2" class="col-sm-3 control-label">qtt par carton</label>
                <div class="col-sm-5">
                    <input autocomplete="off" name="qtt_par_carton" class="form-control" type="text"
                           value="<?php if (isset($_POST['qtt_par_carton'])) echo($_POST['qtt_par_carton']); ?>"/>
                </div>
            </div>





            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">

                    <button type="submit" name="submit" class="btn btn-success">Ajouter +</button>

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

