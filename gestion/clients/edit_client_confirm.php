<?php
$url = "index.php?p=gestion/clients/liste_client.php";
$id='';
$societe  ='';
$tel  ='';
$fax  ='';
$email  ='';
$adresse  ='';
$nrc ='';
$nif  ='';
$nis  ='';
$A_I  ='';
$cb ='';
$ccp ='';
$date  ='';
$ville  ='';
$wilaya  ='';
$prix  ='';
$is_vente  ='';
$is_facturation  ='';
$dette = 0;


if(isset($_POST['submit']) ){

    if(isset($_POST['id']) )
        $id = $_POST['id'];

    if(isset($_POST['societe']) )
        $societe = $_POST['societe'];

    if(  isset($_POST['dette'])  )
        $dette = $_POST['dette'];

    if(  isset($_POST['tel'])  )
        $tel = $_POST['tel'];

    if( isset($_POST['fax']) )
        $fax = $_POST['fax'];

    if(  isset($_POST['email']) )
        $email = $_POST['email'];

    if( isset($_POST['adresse']))
        $adresse = $_POST['adresse'];

    if(  isset($_POST['nrc']))
        $nrc = $_POST['nrc'];

    if(  isset($_POST['nif']))
        $nif = $_POST['nif'];

    if(  isset($_POST['nis']) )
        $nis = $_POST['nis'];
    if(  isset($_POST['A_I']) )
        $A_I = $_POST['A_I'];

    if(  isset($_POST['commune']) )
        $ville = $_POST['commune'];

    if(  isset($_POST['wilaya']) )
        $wilaya = $_POST['wilaya'];

    if(  isset($_POST['is_vente']) )
        $is_vente = $_POST['is_vente'];

    if(  isset($_POST['is_facturation']) )
        $is_facturation = $_POST['is_facturation'];

    if(  isset($_POST['prix']) )
        $prix = $_POST['prix'];


    $ccp = "";
    $date = date("d-m-Y");
    $cb = "";
    if(  isset($_POST['compte_bancaire']))
        $cb = $_POST['compte_bancaire'];

    if(isset($_POST['ccp']))
        $ccp = $_POST['ccp'];

	$request = mysqli_query($link,"update   `clients` set 
														`societe` = '".$societe."'
														,dette='".$dette."'
														,`tel`='".$tel."'
														,`fax`='".$fax."'
														,`email`='".$email."'
														,`adresse` ='".$adresse."'
														,`nrc`='".$nrc."'
														,`nif` ='".$nif."'
														,`A.I`='".$A_I."'
														,`compte_bancaire` ='".$cb."'
														,`ccp`='".$ccp."'
														, wilaya='".$wilaya."'
														, prix='".$prix."'
														, is_vente='".$is_vente."'
														, is_facturation='".$is_facturation."'
														, ville='".$ville."'
														,`date_inscription`='".$date."' 
										where id = $id
														") or die(mysqli_error($link));
	if($request){?>
		<div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
		<script type="text/javascript">
			document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Vous avez ajouté un chantier avec succès.</div>";
			setTimeout(function() {
				document.getElementById('reussi').innerHTML = "";
			},3000);
		</script>
		<?php
		echo"<meta http-equiv=\"refresh\" content=\"1;URL=".$url."\">";
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