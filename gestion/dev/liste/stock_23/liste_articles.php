<center>
    <h2>Liste des articles</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/articles/ajout_articles.php">
            Ajouter Articles<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `articles`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>id</th>
                <th>reference</th>
                <th>code_bare</th>
                <th>designation</th>
                <th>couleur</th>
                <th>puissance</th>
                <th>qtt_carton</th>
                <th>description</th>
                <th>image</th>
                <th>_articles_categorie</th>
                <th>_articles_marque</th>
                <th>_articles_emplacement</th>                        
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["reference"]?></td>
                    <td><?php echo $row["code_bare"]?></td>
                    <td><?php echo $row["designation"]?></td>
                    <td><?php echo $row["couleur"]?></td>
                    <td><?php echo $row["puissance"]?></td>
                    <td><?php echo $row["qtt_carton"]?></td>
                    <td><?php echo $row["description"]?></td>
                    <td><?php echo $row["image"]?></td>
                    <td><?php echo $row["_articles_categorie"]?></td>
                    <td><?php echo $row["_articles_marque"]?></td>
                    <td><?php echo $row["_articles_emplacement"]?></td>

                    <td>
                        <a href="?p=gestion/articles/edit_articles.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/articles/delete_articles.php/<?php echo $row["id"]?>"
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
