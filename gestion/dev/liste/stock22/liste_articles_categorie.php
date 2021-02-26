<center>
    <h2>Liste des articles_categorie</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/articles_categorie/ajout_articles_categorie.php">
            Ajouter Articles_categorie<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `articles_categorie`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>id</th>
                <th>description</th>                        
                <th  colspan="2">action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["description"]?></td>

                    <td>
                        <a href="?p=gestion/articles_categorie/edit_articles_categorie.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href="?p=gestion/articles_categorie/delete_articles_categorie.php/<?php echo $row["id"]?>"
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
