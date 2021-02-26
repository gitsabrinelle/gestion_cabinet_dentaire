<?php
$_transferts_f = $vars[1];
 ?>

<div class="col-sm-12">
    <center>
        <h2>nouveau transfert des produits finis  vers la direction </h2>
    </center>
    <br/>
    <?php
     $sql = "SELECT * FROM views_transfert_articles where  `_transferts_f` = $_transferts_f order by id desc";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>Reference</th>
            <th>Unités par Carton</th>
            <th>QTT Carton</th>
            <th>QTT Pieces</th>

            <th >action</th>
        </tr>
        </thead>
        <tbody>
        <tr  >

            <form method="POST" action ="?p=gestion/dossiers/ajouter_transfert_articles_confirm">
                <input type="hidden" name="_transferts_f" value="<?php echo $_transferts_f?>">
                <td >
                    <input name = "reference" class="col-sm-12 form-control" autofocus/>
                </td>
                <td ></td>
                <td ><input name = "qtt_par_carton"   class="col-sm-12 form-control"/></td>
                <td  ><input name = "qtt_par_piece"  class="col-sm-12 form-control"/></td>


                <td   >

                    <button type="submit" name="submit" class="btn btn-success form-control"> +</button>

                </td>

            </form>

        </tr>

        <?php
        if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['reference']; ?></td>
                <td><?php echo $row['qtt_par_carton_article']; ?></td>
                <td><?php echo $row['qtt_par_carton']; ?></td>
                <td><?php echo $row['qtt_par_piece']; ?></td>
                <td><a href="?p=gestion/dossiers/delete_transfert_article.php/<?php echo $_transferts_f."/".$row["id"] ?>"
                       class="btn btn-danger btn-sm btn-icon icon-left form-control">
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