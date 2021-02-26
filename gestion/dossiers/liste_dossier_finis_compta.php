<?php
$_dossier = $vars[1];
$marge = 10;
$sql = "SELECT * FROM dossiers where id = $_dossier ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numero = $row['numero'];
        }
    }
} ?>

<div class="col-sm-12">
    <center>
        <h2>Liste des produits finis du dossier numero "<?php echo $numero; ?>"</h2>
    </center>
    <br/>
    <?php
    $sql = "SELECT * FROM views_transfert_articles where  `_dossiers` = $_dossier";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>Reference</th>
            <th>Unités par Carton</th>
            <th>QTT Carton</th>
            <th>QTT Pieces</th>
            <th>Prix Revient</th>
            <th>Marge %</th>
            <th>Prix HT </th>
            <th >action</th>
        </tr>
        </thead>
        <tbody>


        <?php
        if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <form method="POST" action="liste_dossier_finis_prix_qtt.php">
                    <input type="hidden" name="_dossier" value="<?php echo $_dossier ?>">
                    <td ><input name="reference" class="col-sm-1 form-control" value = "<?php echo $row['reference']; ?>" /></td>
                    <td ><?php echo $row["qtt_par_carton_article"]?></td>
                    <td ><input name="quantite_carton" class="col-sm-1  form-control" value = "<?php echo $row['qtt_par_carton']; ?>" /></td>
                    <td ><input name="quantite_pieces" class="col-sm-1  form-control" value = "<?php echo $row['qtt_par_piece']; ?>" /></td>


                    <td ><input name="prix_rev" class="col-sm-1  form-control" value = "<?php //echo $row['prix_rev']; ?>" /></td>

                    <td ><input name="marge" class="col-sm-1  form-control" value = "<?php echo $marge; ?>" /></td>

                    <td><?php //echo $row['prix_rev']; ?></td>


                    <td>
                        <a href="?p=gestion/dossiers/edit_composant.php/<?php //echo $row["_dossier_composants"] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                </form>
            </tr>
            <?php
        } ?>
        </tbody>
    </table>
<?php
mysqli_free_result($result);
}
}
mysqli_close($link);
?>
</div>