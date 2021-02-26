<?php
$url = "index.php?p=gestion/reglages/edit_reglages.php";

$id='';
$marge  ='';
$tva  ='';
$reference = '';
$facturation  ='';
$prix_calcul ='';
$article_montage  ='';

$article_production ='';
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


if(isset($_POST['submit']) ){

    if(isset($_POST['id']) )
        $id = $_POST['id'];

    if(isset($_POST['marge']) )
        $marge = $_POST['marge'];

    if(  isset($_POST['reference'])  )
        $reference = $_POST['reference'];

    if(  isset($_POST['tva'])  )
        $tva = $_POST['tva'];

    if( isset($_POST['facturation']) )
        $facturation = $_POST['facturation'];

    if(  isset($_POST['prix_calcul']) )
        $prix_calcul= $_POST['prix_calcul'];

    if( isset($_POST['article_montage']))
        $article_montage = $_POST['article_montage'];

    if(  isset($_POST['article_production']))
        $article_production = $_POST['article_production'];

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

    $request = mysqli_query($link,"update   `reglages` set 
														`marge` = '".$marge."'
														,`tva`='".$tva."'
														,reference='".$reference."'
														,`facturation`='".$facturation."'
														,`prix_calcul`='".$prix_calcul."'
														,`article_montage` ='".$article_montage."'
														,`article_production`='".$article_production."'
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