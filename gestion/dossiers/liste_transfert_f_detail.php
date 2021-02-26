
<?php

$_dossiers = '';
if(  isset($_POST['_dossiers'])  )
    $_dossiers = $_POST['_dossiers'];

$sql = "SELECT * FROM dossiers where id = $_dossiers ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $numero = $row['numero'];
        }
    }
}

if(isset($_POST['submit']) ) {



    $chauffeur = '';
    if (isset($_POST['chauffeur']))
        $chauffeur = $_POST['chauffeur'];

    $date = '';
    if (isset($_POST['date']))
        $date = $_POST['date'];

            $query = "INSERT INTO  `transferts_f` (
														`_dossiers`
														,`date`
														,`chauffeur`

												) VALUES (
														'" . $_dossiers . "'
														,'" . $date . "'
														,'" . $chauffeur . "'

												)";
            $request = mysqli_query($link, $query) or die(mysqli_error($link));
            //$__transferts_f = mysqli_insert_id($link);
            if ($request) {


                ?>
                <div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
                <script type="text/javascript">
                    document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
                    setTimeout(function () {
                        document.getElementById('reussi').innerHTML = "";
                    }, 3000);
                </script>
                <?php
            } else {
                ?>
                <div id="echec" style="position:absolute; right:10px; Top:30px;"></div>
                <script type="text/javascript">
                    document.getElementById('echec').innerHTML = "<div class='alert alert-danger'><strong>Erreur!</strong> Vous avez une erreur, réessayer de nouveau.</div>";
                    setTimeout(function () {
                        document.getElementById('echec').innerHTML = "";
                    }, 3000);
                </script>
                <?php
            }


}?>

<meta http-equiv="refresh"
      content="1;URL=index.php?p=gestion/dossiers/liste_transfert_direction.php/<?php echo $_dossiers ?>">

