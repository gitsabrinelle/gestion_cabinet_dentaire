<center>
    <h2>Liste des produits</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/articles/ajout_produit.php">
            Nouveau produit<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/>
<?php
$j = 0;
$ref;
$sql = "SELECT * FROM articles ";
if ($result = mysqli_query($link, $sql)) {
    ?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th>Reference</th>
                <th>Designation</th>
                <th>Puissance</th>
                <th>Couleur</th>
                <th>Qtt par Carton</th>
                <th>Composants</th>
                <th colspan="2">action</th>
            </tr>
            </thead>
            <?php
    if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $i = 0; ?>
                <tr>
                    <td><?php echo $row['reference']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><?php echo $row['puissance']; ?></td>
                    <td><?php echo $row['couleur']; ?></td>
                    <td><?php echo $row['qtt_carton']; ?></td>
                    <td><a href="?p=gestion/articles/liste_produit_composants.php/<?php echo $row["id"] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-flow-tree"></i>Gerer
                        </a>
                    </td>
                    <td><a href="?p=gestion/articles/edit_article.php/<?php echo $row["id"] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td><a href="?p=gestion/articles/delete_article.php/<?php echo $row["id"] ?>"
                           class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>Supprimer
                        </a>
                    </td>
                </tr>
                <?php
            }
            $i++; ?>
        </table>
        <?php
        mysqli_free_result($result);
    } else {
        ?><h1>Aucune entrée !</h1><?php
    }
} else {
    ?>
    <h1>Aucun produit n'a encore été ajouté !!</h1>
    <?php
}
mysqli_close($link);
?>
