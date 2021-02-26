<?php
$_transferts_f = $vars[1];
$_transfert_articles = $vars[2];

$query = "DELETE FROM `transfert_articles` WHERE `transfert_articles`.`id` = $_transfert_articles";
$request = mysqli_query($link, $query) or die(mysqli_error($link));
if ($request) {
    ?>
    <div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
    <script type="text/javascript">
        document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
        setTimeout(function () {
            document.getElementById('reussi').innerHTML = "";
        }, 2000);
    </script>

    <?php
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
}?>
<meta http-equiv="refresh"
      content="1;URL=index.php?p=gestion/dossiers/ajout_transfert_articles.php/<?php echo $_transferts_f ?>">
