<?php
$table_name = $vars[1];

$html = "<center>
    <h2>Liste des ".$table_name."</h2>
    <button type=\"button\" class=\"btn btn-success btn-icon\">
        <a href=\"?p=gestion/".$table_name."/ajout_".$table_name.".php\">
            Ajouter ".ucfirst($table_name)."<i class=\"entypo-user-add\"></i>
        </a>
    </button>
</center>
<br/> 
<?php
$"."sql = \"SELECT * FROM `".$table_name."`\";
if ($"."result = mysqli_query($"."link, $"."sql)) {
    if (mysqli_num_rows($"."result) >= 0) { ?>
        <table id='table-2' class='table table-bordered table-striped datatable'>
            <thead>
            <tr>";

                $req = "SELECT `COLUMN_NAME` 
                                FROM `INFORMATION_SCHEMA`.`COLUMNS` 
                                WHERE `TABLE_SCHEMA`='$db' AND `TABLE_NAME`='$table_name';";
                if ($resultat = mysqli_query($link, $req)) {
                    $resultat_num_rows = mysqli_num_rows($resultat);
                    $columns = null;
                    if ($resultat_num_rows > 0) {
                        while ($row = mysqli_fetch_array($resultat)) {
                            $columns[] = $row['COLUMN_NAME'];
                            $html.="
                <th>". $row['COLUMN_NAME']."</th>";

                        }
                            $html.="                        
                <th  colspan=\"2\">action</th>";
                    }
                } ?>
            <?php
            $html.="

            </tr>
            </thead>
            <?"."php
            while ($"."row = mysqli_fetch_array($"."result)) { ?>
                <tr>";
                    foreach ($columns as $collone) {

                        $html.="
                    <td>";

                        $html.="<?"."php echo $"."row[\"".$collone."\"]"."?></td>";

                    }
                    $html.="

                    <td>
                        <a href=\"?p=gestion/".$table_name."/edit_".$table_name.".php/<?"."php echo $"."row[\"id\"]?>\"
                           class=\"btn btn-default btn-sm btn-icon icon-left\">
                            <i class=\"entypo-pencil\"></i>Modifier
                        </a>
                    </td>
                    <td>
                        <a href=\"?p=gestion/$table_name/delete_$table_name.php/<?"."php echo $"."row[\"id\"]?>\"
                           class=\"btn btn-danger btn-sm btn-icon icon-left\">
                            <i class=\"entypo-cancel\"></i>Supprimer
                        </a>
                    </td>
                </tr>
 <?"."php
            }
            ?>
        </table>
        <?"."php
        mysqli_free_result($"."result);
    }
}
mysqli_close($"."link);
?>
";

$filename = 'gestion/dev/liste/'.$db.'/liste_'.$table_name.'.php';
file_put_contents($filename, ($html));

?>
<center>
    <button type="button" class="btn btn-success btn-icon">
        <a href="?p=gestion/dev/liste/<?php echo $db?>/liste_<?php echo $table_name?>.php">
            liste <i class="entypo-list"></i>
        </a>
    </button>
</center>