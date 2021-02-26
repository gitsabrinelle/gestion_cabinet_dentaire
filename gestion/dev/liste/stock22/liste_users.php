<center>
    <h2>Liste des users</h2>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/users/ajout_users.php">
            Ajouter Users<i class="entypo-user-add"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$sql = "SELECT * FROM `users`";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>
                <th>id</th>
                <th>user</th>
                <th>pass</th>
                <th>date</th>
                <th>etat</th>
                <th>web</th>
                <th>status</th>
                <th>check</th>
                <th>_user_type</th>                        
                <th>action</th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["pass"]?></td>
                    <td><?php echo $row["date"]?></td>
                    <td><?php echo $row["etat"]?></td>
                    <td><?php echo $row["web"]?></td>
                    <td><?php echo $row["check"]?></td>

                    <td>
                        <a href="?p=gestion/users/edit_users.php/<?php echo $row["id"]?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>Modifier
                        </a>
                        <a href="?p=gestion/users/delete_users.php/<?php echo $row["id"]?>"
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
