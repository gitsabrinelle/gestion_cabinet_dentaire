<center>
    <h2>Liste des fournisseurs</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/fournisseurs/ajout_fournisseurs.php">
            Ajouter Fournisseurs<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `fournisseurs`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>societe</th>
                <th>Premiere dette</th>
                <th>tel</th>
                <th>fax</th>
                <th>email</th>
                <th>adresse</th>
                <th>compte bancaire</th>
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["societe"]?></td>
                    <td><?php echo $row["dette"]?></td>
                    <td><?php echo $row["tel"]?></td>
                    <td><?php echo $row["fax"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["adresse"]?></td>
                    <td><?php echo $row["compte_bancaire"]?></td>

                    <td>
                        <a href="?p=gestion/fournisseurs/edit_fournisseurs.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/fournisseurs/delete_fournisseurs.php/<?php echo $row["id"]?>"
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
