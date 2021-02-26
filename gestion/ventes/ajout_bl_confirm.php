<?php

if (isset($_POST['submit'])) {


    $_client = '';
    if (isset($_POST['_client']))
        $_client = $_POST['_client'];

    $date = '';
    if (isset($_POST['date']))
        $date = $_POST['date'];

    $_dossier = '';
    if (isset($_POST['_dossier']))
        $_dossier = $_POST['_dossier'];


    $qtt_par_carton = '';
    if (isset($_POST['qtt_par_carton']))
        $qtt_par_carton = $_POST['qtt_par_carton'];
    $query = "INSERT INTO  `bl` (
														`date`
														,`_client`
														,`_dossier`

												) VALUES (
														'" . $date . "'
														,'" . $_client . "'
														,'" . $_dossier . "'

												)";
    $request = mysqli_query($link, $query) or die(mysqli_error($link));
    $_bl = mysqli_insert_id($link);
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


} ?>

<meta http-equiv="refresh"
      content="1;URL=index.php?p=gestion/ventes/ajout_bl_detail.php/<?php echo $_bl ?>">

