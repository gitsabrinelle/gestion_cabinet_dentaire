<?php
$ref='';


if(isset($_POST['submit']) ){

    $societe = '';
    if(  isset($_POST['societe'])  )
        $societe = $_POST['societe'];



    $designation = '';
    if(  isset($_POST['designation'])  )
        $designation = $_POST['designation'];

    $qtt_par_carton = '';
    if(  isset($_POST['qtt_par_carton'])  )
        $qtt_par_carton = $_POST['qtt_par_carton'];






    $query = "INSERT INTO  `composants` (
														`reference`
														,`designation`
														,`qtt_par_carton`

												) VALUES (
														'".$reference."'
														,'".$designation."'
														,'".$qtt_par_carton."'

												)";
    $request = mysqli_query($link,$query) or die(mysqli_error($link));
	if($request){?>
		<div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
			setTimeout(function() {
				document.getElementById('reussi').innerHTML = "";
			},3000);
		</script>
		<?php
		echo'<meta http-equiv="refresh" content="1;URL=index.php?p=gestion/articles/liste_composants.php">';
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