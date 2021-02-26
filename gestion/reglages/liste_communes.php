<center>
    <h2>Liste des communes</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/reglages/ajout_communes.php">
            Ajouter commune<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `view_liste_communes`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>commune</th>
                <th>wilaya</th>
                <th>Numero wilaya</th>
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["commune"]?></td>
                    <td><?php echo $row["wilaya"]?></td>
                    <td><?php echo $row["code"]?></td>

                    <td>
                        <a href="?p=gestion/reglages/edit_communes.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/reglages/delete_communes.php/<?php echo $row["id"]?>"
                           class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>Supprimer
                        </a>
                    </td>
                </tr>
 <?php
            }
            ?>
        </table>
        <?php
        mysqli_free_result($result);
    }
}
mysqli_close($link);
?>
