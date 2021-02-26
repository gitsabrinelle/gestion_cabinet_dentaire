<?php
$ref='';


if(isset($_POST['submit']) ){

    $reference = '';
    if(  isset($_POST['reference'])  )
        $reference = $_POST['reference'];

    $designation = '';
    if(  isset($_POST['designation'])  )
        $designation = $_POST['designation'];



    $puissance = '';
    if(  isset($_POST['puissance'])  )
        $puissance = $_POST['puissance'];


    $couleur = '';
    if(  isset($_POST['couleur'])  )
        $couleur = $_POST['couleur'];

    $qtt_carton = '';
    if(  isset($_POST['qtt_carton'])  )
        $qtt_carton = $_POST['qtt_carton'];


    $_articles_categorie = 'null';
    if(  isset($_POST['_articles_categorie'])  && !empty($_POST['_articles_categorie'])){
        $_articles_categorie = $_POST['_articles_categorie'];
    }

    elseif(  isset($_POST['_articles_categorie_new'])  && !empty($_POST['_articles_categorie_new']) ) {
        $_articles_categorie = $_POST['_articles_categorie_new'];

        $query = "INSERT INTO  `articles_categorie` (
														`description`
												) VALUES (
														'" . $_articles_categorie . "'
												)";
        $request = mysqli_query($link,$query) or die(mysqli_error($link));
        $_articles_categorie = mysqli_insert_id($link);
    }

    $query = "INSERT INTO  `articles` (
														`reference`
														,`designation`
														,`_articles_categorie`
														,`puissance`
														,`couleur`
														,`qtt_carton`

												) VALUES (
														'".$reference."'
														,'".$designation."'
														,".$_articles_categorie."
														,'".$puissance."'
														,'".$couleur."'
														,".$qtt_carton."

												)";
    $request = mysqli_query($link,$query) or die(mysqli_error($link));
    $_articles = mysqli_insert_id($link);
	if($request){

      /*  if($_articles_categorie === "2"){
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $i, $_articles, 1);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $i, $_articles, 1);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $i, $_articles, 1);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $i, $_articles, 13);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( 12, $_articles, 3);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( 9, $_articles, 3);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( 5, $_articles, 1);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( 14, $_articles, 1);";
            $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( 15, $_articles, 1);";

            $array = array(
                1   =>   1,
                3   =>   1,
                2   =>   1,
                13   =>   13,
                12   =>   3,
                9   =>   3,
                5   =>   1,
                14  =>   1,
                15  =>   1
            );

            foreach($array as $id => $qtt) {

                $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $id, $_articles, $qtt);";
                $request = mysqli_query($link,$query) or die(mysqli_error($link));
            }

        }*/

       /* if($_articles_categorie === "1"){
            $array = array(
                            1   =>   1,
                            2   =>   1,
                            3   =>   1,
                            4   =>   1,
                            5   =>   1,
                            6   =>   1,
                            7   =>   2,
                            8   =>   1,
                            9   =>   1,
                            10  =>   1,
                            11  =>   4,
                            12  =>   1
                    );

            foreach($array as $id => $qtt) {

                $query = "INSERT INTO `article_composants` ( `_composants`, `_articles`, `qtt`) VALUES ( $id, $_articles, $qtt);";
                $request = mysqli_query($link,$query) or die(mysqli_error($link));
            }

        }*/
	    ?>
		<div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
			setTimeout(function() {
				document.getElementById('reussi').innerHTML = "";
			},3000);
		</script>
		<?php
		echo'<meta http-equiv="refresh" content="1;URL=index.php?p=gestion/articles/liste_produits.php">';
	}else{?>
		<div id="echec" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('echec').innerHTML = "<div class='alert alert-danger'><strong>Erreur!</strong> Vous avez une erreur, réessayer de nouveau.</div>";
			setTimeout(function() {
				document.getElementById('echec').innerHTML = "";
			},3000);
		</script>
		<?php
	}
}?>