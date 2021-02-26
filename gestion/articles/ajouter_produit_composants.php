<?php


if (isset($_POST['submit'])) {
    $_articles = '';
    if (isset($_POST['_articles']))
        $_articles = $_POST['_articles'];

    $reference_composants = '';
    if (isset($_POST['reference_composants']))
        $reference_composants = $_POST['reference_composants'];

    $sql = "SELECT * FROM composants  where  reference like '" . $reference_composants . "' ";
    $request = mysqli_query($link, $sql) or die(mysqli_error($link));
    $_composants = null;

    if ($request) {


        if (mysqli_num_rows($request) > 0) {

            while ($row = mysqli_fetch_array($request)) {

                $_composants = $row["id"];
            }

            $qtt = '';
            if (isset($_POST['qtt']))
                $qtt = $_POST['qtt'];


            $query = "INSERT INTO  `article_composants` (
														`_composants`
														,`_articles`
														,`qtt`

												) VALUES (
														'" . $_composants . "'
														,'" . $_articles . "'
														,'" . $qtt . "'
												)";
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
} ?>
<meta http-equiv="refresh"
      content="1;URL=index.php?p=gestion/articles/liste_produit_composants.php/<?php echo $_articles ?>">
