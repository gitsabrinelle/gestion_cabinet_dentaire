<?php
$ref='';


if(isset($_POST['submit']) ){

    $numero = '';
    if(  isset($_POST['numero'])  )
        $numero = $_POST['numero'];

    $description = '';
    if(  isset($_POST['description'])  )
        $description = $_POST['description'];



    $date = '';
    if(  isset($_POST['date'])  )
        $date = $_POST['date'];


    $_fournisseur = '';
    if(  isset($_POST['_fournisseur'])  )
        $_fournisseur = $_POST['_fournisseur'];


    $query = "INSERT INTO  `dossiers` (
														`numero`
														,`description`
														,`date`
														,`_fournisseur`

												) VALUES (
														'".$numero."'
														,'".$description."'
														,'".$date."'
														,'".$_fournisseur."'

												)";
    $request = mysqli_query($link,$query) or die(mysqli_error($link));
    $_dossiers = mysqli_insert_id($link);
	if($request){



	    ?>
		<div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
			setTimeout(function() {
				document.getElementById('reussi').innerHTML = "";
			},3000);
		</script>

		<meta http-equiv="refresh" content="1;URL=index.php?p=gestion/dossiers/liste_dossier_composants.php/<?php echo $_dossiers?>">
        <?php
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