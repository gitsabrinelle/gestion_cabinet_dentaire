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
        <h2>Liste des composants du dossier "<?php echo $numero; ?>"</h2>
    </center>
    <br/>
    <?php
    $sql = "SELECT * FROM views_dossier_composants where  `_dossiers` = $_dossiers order by id desc";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>Reference</th>
            <th>Unités par Carton</th>
            <th>QTT Carton</th>
            <th>QTT Pieces</th>
            <th>Nature</th>

            <th >action</th>
        </tr>
        </thead>
        <tbody>
        <tr  >

            <form method="POST" action ="?p=gestion/dossiers/ajouter_dossier_composants">
                <input type="hidden" name="_dossiers" value="<?php echo $_dossiers?>">
                <td >
                    <input name = "reference" class="form-control col-sm-12" autofocus/>
                </td>
                <td ></td>
                <td ><input name = "qtt_par_carton"   class="form-control col-sm-12"/></td>
                <td  ><input name = "qtt_par_piece"  class="form-control col-sm-12"/></td>
                <td  >
                    <select class = "form-control" name="type_qtt">
                        <option selected value="Stock Théorique">Stock Théorique</option>
                        <option value="Stock Réel calculé">Stock Réel calculé</option>
                        <option value="Spoiled Parts">Spoiled Parts</option>
                        <option value="Extra">Extra</option>
                        <option value="Perdu">Perdu</option>
                        <option value="Defectueux">Defectueux</option>
                        <option value="Remboursé(a renommer)">Remboursé par fournisseur(a renommer)</option>
                    </select>

                </td>

                <td   >

                    <button type="submit" name="submit" class="form-control btn btn-success"> +</button>

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
                <td><?php echo $row['qtt_par_carton_composant']; ?></td>
                <td><?php echo $row['qtt_par_carton']; ?></td>
                <td><?php echo $row['qtt_par_piece']; ?></td>
                <td><?php echo $row['type_qtt']; ?></td>
                <td><a href="?p=gestion/dossiers/delete_dossier_composant.php/<?php echo $_dossiers."/".$row["id"] ?>"
                       class="btn btn-danger btn-sm btn-icon icon-left">
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