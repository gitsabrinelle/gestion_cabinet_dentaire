<center>
    <h2>Liste des dossiers</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/dossiers/ajout_dossier.php">
            Nouveau dossier<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/>
<?php
$j = 0;
$ref;
$sql = "SELECT * FROM dossiers ";
if ($result = mysqli_query($link, $sql)) {?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th colspan="2">Stock</th>
                    <th colspan="2">Transferts</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
            <tr>
                <td><?php echo $row['numero']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date']; ?></td>

                <td><a href="?p=gestion/dossiers/liste_dossier_finis.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-flow-tree"></i>Produit finis
                    </a>
                </td>

                <td><a href="?p=gestion/dossiers/liste_dossier_composants.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-flow-tree"></i>Composants
                    </a>
                </td>

                <td><a href="?p=gestion/dossiers/liste_transfert_atelier.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-flow-tree"></i>Transfert vers atelier
                    </a>
                </td>
                <td><a href="?p=gestion/dossiers/liste_transfert_direction.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-flow-tree"></i>Transfert vers direction
                    </a>
                </td>

                <td><a href="?p=gestion/dossiers/edit_dossier.php/<?php echo $row["id"] ?>"
                       class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>Modifier
                    </a>
                </td>

                <td><a href="?p=gestion/dossiers/delete_dossier.php/<?php echo $row["id"] ?>"
                       class="btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>Supprimer
                    </a>
                </td>
            </tr>
                <?php
            }

        mysqli_free_result($result);
    } else{ ?>
         <h2>Aucune entrée !</h2>
    <?php }
            ?>
        </table>
    <?php
} else {
    ?>
    <h1>Aucun dossier n'a encore été ajouté !!</h1>
    <?php
}
mysqli_close($link);
?>
