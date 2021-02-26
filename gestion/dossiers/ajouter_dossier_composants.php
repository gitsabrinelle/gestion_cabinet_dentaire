<?php

if(isset($_POST['submit']) ) {

    $qtt_par_carton_composant = 0;
    $_composants = '';
    $_dossiers = '';
    if (isset($_POST['_dossiers']))
        $_dossiers = $_POST['_dossiers'];

    $reference = '';
    if (isset($_POST['reference']))
        $reference = $_POST['reference'];

    $type_qtt = '';
    if (isset($_POST['type_qtt']))
        $type_qtt = $_POST['type_qtt'];

    $qtt_par_piece = '';
    if (isset($_POST['qtt_par_piece']))
        $qtt_par_piece = $_POST['qtt_par_piece'];


    $qtt_par_carton = '';
    if (isset($_POST['qtt_par_carton']))
        $qtt_par_carton = $_POST['qtt_par_carton'];







    $sql = "SELECT * FROM composants  where  reference like '" . $reference . "' ";
    $request = mysqli_query($link, $sql) or die(mysqli_error($link));


    if ($request) {

        if (mysqli_num_rows($request) > 0) {
            while ($row = mysqli_fetch_array($request)) {
                $_composants = $row["id"];
                $qtt_par_carton_composant = $row["qtt_par_carton"] ;
                if($qtt_par_carton_composant>0){
                    if (!empty($_POST['qtt_par_carton'] &&  ($_POST['qtt_par_carton']!="0")) && (empty($_POST['qtt_par_piece']) || ($_POST['qtt_par_piece']==="0")))
                        $qtt_par_piece = $qtt_par_carton * $qtt_par_carton_composant ;

                    if (!empty($_POST['qtt_par_piece'] &&  ($_POST['qtt_par_piece']!="0")) && (empty($_POST['qtt_par_carton']) || ($_POST['qtt_par_carton']==="0")))
                        $qtt_par_carton = $qtt_par_piece / $qtt_par_carton_composant ;
                }





            }

            $query = "INSERT INTO  `dossier_composants` (
														`_composants`
														,`_dossiers`
														,`qtt_par_carton`
														,`qtt_par_piece`
														,`type_qtt`

												) VALUES (
														'" . $_composants . "'
														,'" . $_dossiers . "'
														,'" . $qtt_par_carton . "'
														,'" . $qtt_par_piece . "'
														,'" . $type_qtt . "'

												)";
            $request = mysqli_query($link, $query) or die(mysqli_error($link));
            //$_dossiers = mysqli_insert_id($link);
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
        } else {
            ?>
            <div id="echec" style="position:absolute; right:10px; Top:30px;"></div>
            <script type="text/javascript">
                document.getElementById('echec').innerHTML = "<div class='alert alert-danger'><strong>Erreur!</strong> Vous avez une erreur, réessayer de nouveau.</div>";
                setTimeout(function () {
                    document.getElementById('echec').innerHTML = "";
                }, 2000);
            </script>
            <?php
        }
    } else {
        ?>
        <div id="echec" style="position:absolute; right:10px; Top:30px;"></div>
        <script type="text/javascript">
            document.getElementById('echec').innerHTML = "<div class='alert alert-danger'><strong>Erreur!</strong> Vous avez une erreur, réessayer de nouveau.</div>";
            setTimeout(function () {
                document.getElementById('echec').innerHTML = "";
            }, 2000);
        </script>
        <?php
    }
}?>

<meta http-equiv="refresh"
      content="1;URL=index.php?p=gestion/dossiers/liste_dossier_composants.php/<?php echo $_dossiers ?>">

