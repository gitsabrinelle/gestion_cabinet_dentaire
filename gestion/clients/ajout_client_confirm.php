<?php
$ref='';
$societe  ='';
$tel  ='';
$fax  ='';
$email  ='';
$adress  ='';
$nrc ='';
$nif  ='';
$nis  ='';
$art  ='';
$cb ='';
$ccp ='';
$date  ='';
$ville  ='';
$wilaya  ='';
$dette = 0;
$Societe='';

if(isset($_POST['societe']) ){

    $societe = $_POST['societe'];

    if(isset($_POST['Societe']) )
        $Societe = $_POST['Societe'];

    if(  isset($_POST['dette'])  )
        $dette = $_POST['dette'];

    if(  isset($_POST['tel'])  )
        $tel = $_POST['tel'];

    if( isset($_POST['fax']) )
        $fax = $_POST['fax'];

    if(  isset($_POST['email']) )
        $email = $_POST['email'];

    if( isset($_POST['adress']))
        $adress = $_POST['adress'];

    if(  isset($_POST['nrc']))
        $nrc = $_POST['nrc'];

    if(  isset($_POST['nif']))
        $nif = $_POST['nif'];

    if(  isset($_POST['nis']) )
        $nis = $_POST['nis'];
    if(  isset($_POST['nart']) )
        $art = $_POST['nart'];

    if(  isset($_POST['commune']) )
        $ville = $_POST['commune'];

    if(  isset($_POST['wilaya']) )
        $wilaya = $_POST['wilaya'];

    $cb = "";
    $ccp = "";
    $date = date("d-m-Y");

    if(  isset($_POST['ncb']))
        $cb = $_POST['ncb'];

    if(isset($_POST['ccp']))
        $ccp = $_POST['ccp'];

	$request = mysqli_query($link,"INSERT INTO  `clients` (
														`Societe`
														,`Societe`
														,dette
														,`tel`
														,`fax`
														
														,`email`
														,`adresse` 
														,`nrc`
														,`nif` 
														,N_ART
														,`compte_bancaire` 
														,`ccp`
														, wilaya
														, ville
														,`date_inscription`
												) VALUES (
														'".$societe."'
														,'".$Societe."'
														,'".$dette."'
														,'".$tel."'
														,'".$fax."'
														,'".$email."'
														,'".$adress."'
														,'".$nrc."'
														,'".$nif."'
														,'".$art."'
														,'".$cb."'
														,'".$ccp."'
														,'".$wilaya."'
														,'".$ville."'
														,'".$date."' 
												)") or die(mysqli_error($link));
	if($request){?>
		<div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Vous avez ajouté un chantier avec succès.</div>";
			setTimeout(function() {
				document.getElementById('reussi').innerHTML = "";
			},3000);
		</script>
		<?php
		echo'<meta http-equiv="refresh" content="1;URL=index.php?p=gestion/clients/liste_client.php">';
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