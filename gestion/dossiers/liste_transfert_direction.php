<?php
$_dossiers = $vars[1];

$sql = "SELECT * FROM dossiers where id = $_dossiers ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numero = $row['numero'];
        }
    }
} ?>

<div class="col-sm-12">
    <center>
        <h2>Liste des transferts des produits finis vers la direction  :  dossier "<?php echo $numero; ?>"</h2>
    </center>
    <br/>
    <?php
    $sql = "SELECT * FROM views_dossier_transfers_t where  `_dossiers` = $_dossiers order by id desc";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>date</th>
            <th>chauffeur</th>
            <th>Detail</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <tr  >

        <form method="POST" action ="?p=gestion/dossiers/liste_transfert_f_detail">
            <input type="hidden" name="_dossiers" value="<?php echo $_dossiers?>">
            <td >
                <input name = "date" type="date" class="col-sm-12 form-control" autofocus/>
            </td>
            <td ><input type="text" name = "chauffeur"   class="form-control col-sm-12"/></td>

            <td   >
            </td   >
            <td   >

                <button type="submit" name="submit" class=" btn btn-success"> +</button>

            </td>

        </form>

        </tr>

        <?php
        if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['chauffeur']; ?></td>
                <td>
                    <a href="?p=gestion/dossiers/ajout_transfert_articles.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-flow-tree"></i>Detail
                    </a>
                </td>
                <td>
                    <a href="?p=gestion/dossiers/delete_dossier_article.php/<?php echo $_dossiers."/".$row["id"] ?>"
                       class=" btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>Supprimer
                    </a>
                </td>

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