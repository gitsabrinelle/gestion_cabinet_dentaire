<center>
    <h2>Liste des tables</h2>
</center>
<br/>
<?php
$sql = "show full tables where Table_Type != 'VIEW' ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th>Nom de la table</th>
                <th>Liste</th>
            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?php echo $row["Tables_in_" . $db]; ?></td>
                    <td>
                        <a href="?p=gestion/dev/liste.php/<?php echo $row["Tables_in_" . $db] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-download"></i>Liste
                        </a>
                    </td>
                </tr>
                <?php
            }?>
        </table>
        <?php
    }
}?>


<center>
    <h2>Liste des Views</h2>
</center>
<br/>
<?php
$sql = "show full tables where Table_Type = 'VIEW' ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {?>
        <table id='table-2' class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th>Nom de la View</th>
                <th>Liste</th>
            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?php echo $row["Tables_in_" . $db]; ?></td>
                    <td>
                        <a href="?p=gestion/dev/liste.php/<?php echo $row["Tables_in_" . $db] ?>"
                           class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-download"></i>Liste
                        </a>
                    </td>
                </tr>
                <?php
            }?>
        </table>
        <?php
    }
}?>
