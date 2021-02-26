<?php
$_dossier = $vars[1];
$marge = 10;

$cartons = 0 ;
$pieces = 0 ;
$total_prix_1 = 0 ;
$total_prix_2 = 0 ;
$total_prix_3 = 0 ;

$total_prix_ht = 0 ;

$sql = "SELECT * FROM dossiers where id = $_dossier ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numero = $row['numero'];
        }
    }
} ?>

<div class="col-sm-12">
    <center>
        <h2>Liste des produits finis du dossier numero "<?php echo $numero; ?>"</h2>
    </center>
    <br/>
    <?php
    $sql = "SELECT * FROM views_transfert_articles_grouped_prix where  `_dossiers` = $_dossier";

    ?>
    <table id='table-2' class="table table-bordered table-striped  responsive">
        <thead>
        <tr>
            <th>Reference</th>
            <th>Unités par Carton</th>
            <th>QTT Carton</th>
            <th>QTT Pieces</th>

            <th>Prix 1</th>
            <th>Montant 1</th>
            <th>Prix 2</th>
            <th>Montant 2</th>
            <th>Prix 3</th>
            <th>Montant 3</th>

            <th>Prix Revient</th>
            <th>Marge %</th>
            <th>Prix HT </th>

            <th >action</th>
        </tr>
        </thead>
        <tbody>


        <?php
        if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <form method="POST" action="liste_dossier_finis_prix_qtt.php">
                    <input type="hidden" name="_dossier" value="<?php echo $_dossier ?>">
                    <input type="hidden" name="_article" value="<?php echo  $row['_articles'] ?>">
                    <td class="col-sm-1  " > <?php echo $row['reference']; ?> </td>
                    <td class="col-sm-1  " ><?php echo $row["qtt_par_carton_article"] ; ?></td>
                    <td class="col-sm-1  " > <?php echo $row['qtt_par_carton']; $cartons+=$row["qtt_par_carton"] ; ?> </td>
                    <td class="col-sm-1  " > <?php echo $row['qtt_par_piece'];$pieces+=$row["qtt_par_piece"] ; ?></td>




                    <td class="col-sm-1  " ><input name="prix_1" class="col-sm-12  " value = "<?php echo $row['prix_1']; ?>" /></td>
                    <td class="col-sm-1  " ><?php  echo $row['prix_1']*$row['qtt_par_piece'];  $total_prix_1+=$row['prix_1']*$row['qtt_par_piece'];?></td>
                    <td class="col-sm-1  " ><input name="prix_2" class="col-sm-12" value = "<?php echo $row['prix_2']; ?>" /></td>
                    <td class="col-sm-1  " ><?php  echo $row['prix_2']*$row['qtt_par_piece'];   $total_prix_2+=$row['prix_2']*$row['qtt_par_piece'];?></td>
                    <td class="col-sm-1  " ><input name="prix_3" class="col-sm-12" value = "<?php  echo $row['prix_3']; ?>" /></td>
                    <td class="col-sm-1  " ><?php  echo $row['prix_3']*$row['qtt_par_piece']; $total_prix_3+=$row['prix_3']*$row['qtt_par_piece']; ?></td>

                    <td class="col-sm-1  " ><input name="prix_rev" class="col-sm-12" value = "<?php echo $row['prix_rev']; ?>" /></td>
                    <td class="col-sm-1  " ><input name="marge" class="col-sm-12" value = "<?php echo $row['marge'];; ?>" /></td>
                    <td class="col-sm-1  " ><?php echo $row['prix_ht']*$row['qtt_par_piece'];   $total_prix_ht+=$row['prix_ht']*$row['qtt_par_piece']; ?></td>

                    <td class="col-sm-1  " >
                        <button type="submit" name="submit" class="btn btn-info form-control"> Modifier</button>

                    </td>
                </form>
            </tr>
            <?php
        } ?>
        <tr>
            <th><strong>TOTAL</strong></th>
            <th></th>
            <th><strong><?php echo $cartons?></strong></th>
            <th><strong><?php echo $pieces?></strong></th>

            <th></th>
            <th><strong><?php echo $total_prix_1?></strong></th>
            <th></th>
            <th><strong><?php echo $total_prix_2?></strong></th>
            <th></th>
            <th><strong><?php echo $total_prix_3?></strong></th>

            <th></th>
            <th></th>
            <th><strong><?php echo $total_prix_ht?></strong></th>

            <th ></th>
        </tr>
        </tbody>
    </table>
<?php
mysqli_free_result($result);
}
}
mysqli_close($link);
?>
</div>