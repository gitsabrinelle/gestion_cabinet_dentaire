<?php

/*
$sql = "SELECT * FROM dossiers where id = $_dossiers ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numero = $row['numero'];
        }
    }
}*/ ?>

<div class="col-sm-12">
    <center>
        <h2>Ajouter un nouveau Bon de Livraison  :   </h2>
    </center>
    <br/>
    <?php
    //$sql = "SELECT * FROM views_dossier_transfers where  `_dossiers` = $_dossiers order by id desc";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>dossier</th>
            <th>client/societe</th>
            <th>date</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <tr  >

            <form method="POST" action ="?p=gestion/ventes/ajout_bl_confirm">
               <td class="col-sm-2">
                   <select class="form-control select2" name="_dossier">
                       <?php
                       $sql = "SELECT * FROM dossiers order by id desc";
                       if ($result = mysqli_query($link, $sql)) {
                           if (mysqli_num_rows($result) > 0) {
                               $first = false;
                               while ($row = mysqli_fetch_array($result)) {
                                   $description = $row['description'];
                                   ?>
                                   <option value  = "<?php echo $row['numero']?>" <?php if(!$first) { echo "selected"; $first = true ;                                   }?> ><?php echo $description?></option>
                                   <?php
                               }
                           }
                       }
                       ?>
                   </select>
                </td>
                <td class="col-sm-5">
                    <select class="form-control select2" name="_client">
                        <?php
                        $sql = "SELECT * FROM clients ";
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                ?><option value="null" selected></option><?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $societe = $row['societe'];
                                    ?>
                                    <option value="<?php echo $row['id'];?>"><?php echo $societe?></option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                </td>
                <td class="col-sm-2">
                    <input name = "date" type="date" class="col-sm-12 form-control" value="<?php echo date('Y-m-d'); ?>"/>
                </td >
                <td class="col-sm-1">
                    <button type="submit" name="submit" class=" btn btn-success form-control"> +</button>
                </td>
            </form>
        </tr>
        <?php
        /*if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {*/
            ?>
            <tr>
                <td><?php //echo $row['date']; ?></td>
                <td><?php //echo $row['chauffeur']; ?></td>
                <td class="centered">
                    <a href="?p=gestion/dossiers/ajout_transfert_composants.php/<?php echo $row["id"] ?>"
                       class="btn btn-default centered btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>modifier
                    </a>
                </td>
                <td>
                    <a href="?p=gestion/dossiers/delete_dossier_composant.php/<?php ////echo $_dossiers."/".$row["id"] ?>"
                       class=" btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>Supprimer
                    </a>
                </td>
            </tr>
            <?php
       // } ?>
        </tbody>
    </table>
<?php
mysqli_free_result($result);
/*}
}*/
mysqli_close($link);
?>
</div>