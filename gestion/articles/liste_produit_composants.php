<?php
$_article = $vars[1];

$sql = "SELECT * FROM articles where id = $_article ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $reference = $row['reference'];
        }
    }
}

?>


<center>
    <h2>Liste des composants du produit "<?php echo $reference; ?>"</h2>
</center>
<br/>
<?php
$sql = "SELECT * FROM views_article_composants where  `_articles` = $_article";

     ?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th>Reference</th>
                <th>Designation</th>

                <th>Qtt</th>
                <th >action</th>
            </tr>
            </thead>

                <tr>
                    <form method="POST" action ="?p=gestion/articles/ajouter_produit_composants">
                        <input type="hidden" name="_articles" value="<?php echo $_article?>">
                        <td><input name="reference_composants" type="text" class="form-control"/></td>
                        <td></td>
                        <td><input name="qtt" value ="1" type="text" class="form-control"/></td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success form-control"  > +</button>
                        </td>

                    </form>
                </tr>
    <?php
    if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['reference_composants']; ?></td>
                    <td><?php echo $row['designation_composants']; ?></td>
                    <td><?php echo $row['qtt']; ?></td>
                    <td><a href="?p=gestion/articles/delete_produit_composant.php/<?php echo $_article."/".$row["_article_composants"] ?>"
                           class="btn btn-danger btn-sm btn-icon icon-left  form-control">
                            <i class="entypo-cancel "></i>Supprimer
                        </a>
                    </td>
                </tr>
                <?php
            } ?>
        </table>
        <?php
        mysqli_free_result($result);
    }
}
mysqli_close($link);
?>
