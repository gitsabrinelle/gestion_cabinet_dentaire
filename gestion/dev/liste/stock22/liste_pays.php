<center>
    <h2>Liste des pays</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/pays/ajout_pays.php">
            Ajouter Pays<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `pays`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>id</th>
                <th>code</th>
                <th>alpha2</th>
                <th>alpha3</th>
                <th>nom_en_gb</th>
                <th>nom_fr_fr</th>                        
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["code"]?></td>
                    <td><?php echo $row["alpha2"]?></td>
                    <td><?php echo $row["alpha3"]?></td>
                    <td><?php echo $row["nom_en_gb"]?></td>
                    <td><?php echo $row["nom_fr_fr"]?></td>

                    <td>
                        <a href="?p=gestion/pays/edit_pays.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/pays/delete_pays.php/<?php echo $row["id"]?>"
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
