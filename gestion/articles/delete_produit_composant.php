<?php
$_articles = $vars[1];
$_article_composants = $vars[2];

$query = "DELETE FROM `article_composants` WHERE `article_composants`.`id` = $_article_composants";
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
      content="1;URL=index.php?p=gestion/articles/liste_produit_composants.php/<?php echo $_articles ?>">
