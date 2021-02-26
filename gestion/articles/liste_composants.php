<center>
    <h2>Liste des composants</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/articles/ajout_composant.php">
            Nouveau composant<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/>
<?php
$j = 0;
$ref;
$sql = "SELECT * FROM composants ";
if ($result = mysqli_query($link, $sql)) {
        ?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th>Reference</th>
                <th>Designation</th>
                <th>Qtt par carton</th>
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
                    <td><?php echo $row['qtt_par_carton']; ?></td>

                    <td><a href="?p=gestion/articles/edit_composant.php/<?php echo $row["id"] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td><a href="?p=gestion/articles/delete_composant.php/<?php echo $row["id"] ?>"
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
        ?><h2>Aucune entrée !</h2><?php
    }
} else {
    ?>
    <h1>Aucun composant n'a encore été ajouté !!</h1>
    <?php
}
mysqli_close($link);
?>
