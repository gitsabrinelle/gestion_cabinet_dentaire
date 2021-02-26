<center>
    <h2>Liste des views_dossier_composants</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/views_dossier_composants/ajout_views_dossier_composants.php">
            Ajouter Views_dossier_composants<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `views_dossier_composants`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>_article_composants</th>
                <th>_articles</th>
                <th>reference_article</th>
                <th>designation_article</th>
                <th>_composants</th>
                <th>reference_composants</th>
                <th>designation_composants</th>
                <th>couleur_composants</th>
                <th>puissance_composants</th>
                <th>qtt</th>                        
                <th>action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["_article_composants"]?></td>
                    <td><?php echo $row["_articles"]?></td>
                    <td><?php echo $row["reference_article"]?></td>
                    <td><?php echo $row["designation_article"]?></td>
                    <td><?php echo $row["_composants"]?></td>
                    <td><?php echo $row["reference_composants"]?></td>
                    <td><?php echo $row["designation_composants"]?></td>
                    <td><?php echo $row["couleur_composants"]?></td>
                    <td><?php echo $row["puissance_composants"]?></td>
                    <td><?php echo $row["qtt"]?></td>

                    <td>
                        <a href="?p=gestion/views_dossier_composants/edit_views_dossier_composants.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                        <a href="?p=gestion/views_dossier_composants/delete_views_dossier_composants.php/<?php echo $row["id"]?>"
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
