<?php
$_bl = $vars[1];


$cartons = 0 ;
$pieces = 0 ;
$total_prix_1 = 0 ;
$total_prix_2 = 0 ;
$total_prix_3 = 0 ;

$prix_choix = null ;


$sql = "SELECT * FROM views_bl_client where id = $_bl ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

                $prix_choix = $row['prix']  ;
        }
    }
} ?>

<div class="col-sm-12">
    <center>
        <a href ="gestion/print/print_bl.php?id=<?php echo $_bl?>" type="submit" name="submit" class=""> Imprimer</a>

    </center>
    <br/>
    <?php
    $sql = "SELECT * FROM views_bl_detail where  `_bl` = $_bl";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>Dossier </th>
            <th>Reference</th>
            <th>QTT des Cartons</th>
            <th>QTT en Pieces</th>
            <th>Prix Unitaire</th>
            <th>Prix personalisé</th>
            <th>Montant</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td class="col-sm-2">
                    <select class="form-control " name="_dossier">
                        <?php
                        $sql_dossiers = "SELECT * FROM dossiers order by id desc";
                        if ($result_dossiers = mysqli_query($link, $sql_dossiers)) {
                            if (mysqli_num_rows($result_dossiers) > 0) {
                                $first = false;
                                while ($row_dossiers = mysqli_fetch_array($result_dossiers)) {
                                    $description = $row_dossiers['description'];
                                    ?>
                                    <option value  = "<?php echo $row_dossiers['numero']?>" <?php if(!$first) { echo "selected"; $first = true ;                                   }?> ><?php echo $description?></option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>

                </td>
                <td class="col-sm-1"><input class="form-control"></td>
                <td class="col-sm-1"><input class="form-control"></td>
                <td class="col-sm-1"></td>
                <td>
                    <select name="choix_prix" class="form-control">
                        <option value="Prix 1">Prix 1</option>
                        <option value="Prix 2">Prix 2</option>
                        <option value="Prix 3">Prix 3</option>
                    </select>
                </td>
                <td><input class="form-control">
                </td>
                <td></td>
                <td></td>
            </tr>
        <?php
        if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <form method="POST" action="ajout_bl_detail_confirm.php">
                    <input type="hidden" name="_article" value="<?php echo  $row['_articles'] ?>">
                    <td class="col-sm-1  " >

                        <?php echo $row['_dossier_description']; ?>

                    </td>
                    <td class="col-sm-1" > <?php echo $row['_articles_reference']; ?> </td>
                    <td class="col-sm-2  " > <?php echo $row['qtt_cartons']; $cartons+=$row["qtt_piece"] ; ?>
                        <br>Pieces par Carton : <?php echo $row["_articles_qtt_carton"] ; ?>

                        <br>Qtt Disponible : <?php ?>
                        <br>Qtt  Vendu : <?php ?>
                    </td>
                    <td class="col-sm-2  " > <?php echo $row['qtt_piece'];$pieces+=$row["qtt_piece"] ; ?>

                        <br>Qtt Disponible : <?php ?>
                        <br>Qtt  Vendu : <?php ?></td>

                    <td class="col-sm-1"> <?php echo $prix_choix ;?></td>
                    <td class="col-sm-1" ><?php echo $row["prix"]; ?>

                    </td>
                    <td class="col-sm-1" ><?php  echo $row['prix']*$row['qtt_piece'];  $total_prix_1+=$row['prix']*$row['qtt_piece'];?></td>



                    <td class="col-sm-1  " >
                        <button type="submit" name="submit" class="btn btn-success form-control">+</button>

                    </td>
                </form>
            </tr>
            <?php
        } ?>

        </tbody>
    </table>
<?php
mysqli_free_result($result);
}
}
mysqli_close($link);
?>
</div>