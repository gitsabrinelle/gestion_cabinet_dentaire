<?php

if(isset($_POST['submit']) ) {

    $qtt_par_carton_composant = 0;
    $_composants = '';
    $_transferts = '';
    if (isset($_POST['_transferts']))
        $_transferts = $_POST['_transferts'];

    $reference = '';
    if (isset($_POST['reference']))
        $reference = $_POST['reference'];

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

            $query = "INSERT INTO  `transfert_composants` (
														`_composants`
														,`_transferts`
														,`qtt_par_carton`
														,`qtt_par_piece`

												) VALUES (
														'" . $_composants . "'
														,'" . $_transferts . "'
														,'" . $qtt_par_carton . "'
														,'" . $qtt_par_piece . "'

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
      content="1;URL=index.php?p=gestion/dossiers/ajout_transfert_composants.php/<?php echo $_transferts ?>">

