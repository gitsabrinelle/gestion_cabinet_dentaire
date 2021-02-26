<center>
    <h2>Liste des reglages</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/reglages/ajout_reglages.php">
            Ajouter Reglages<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `reglages`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>id</th>
                <th>marge</th>
                <th>tva</th>
                <th>reference</th>
                <th>facturation</th>
                <th>prix_calcul</th>
                <th>article_montage</th>
                <th>article_production</th>                        
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["marge"]?></td>
                    <td><?php echo $row["tva"]?></td>
                    <td><?php echo $row["reference"]?></td>
                    <td><?php echo $row["facturation"]?></td>
                    <td><?php echo $row["prix_calcul"]?></td>
                    <td><?php echo $row["article_montage"]?></td>
                    <td><?php echo $row["article_production"]?></td>

                    <td>
                        <a href="?p=gestion/reglages/edit_reglages.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/reglages/delete_reglages.php/<?php echo $row["id"]?>"
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
