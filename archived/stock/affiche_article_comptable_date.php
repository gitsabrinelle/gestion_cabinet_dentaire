<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  Logiciel De Stock </title>
<link href="design/style2.css" rel="stylesheet" type="text/css" />
<script src="design/scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="design/spryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="design/scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="design/spryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
  <center>
<div class="header" id="header"></div>
  </center>
 
 
<div class="sidebar1">
 <center>
 <div id ="menu">
   <ul id="MenuBar1" class="MenuBarHorizontal">
     <li><a href="../" class="MenuBarItemSubmenu">Acceuil</a>       </li>
</ul>
 </div> </center>
    <br /><br /><br /> 
	
     <?php
	
include("../global.php");

 if (isset($_GET["annee"])&& isset($_GET["mois"]) )
  {	
	 
	if ($_GET["annee"]=="NULL" && $_GET["mois"]="NULL")
 {
 
 
 $month1 = "12";
 		
		$year1="2011";
		
$month2 = date("m");
 		
		$year2 = date("Y");
		}
		
		if ($_GET["annee"]=="NULL" )
		{
			$year1="2011";
			$year2=date("Y");
			
			}
			else
			{
				
				$year1= $_GET["annee"]-1;
			$year2=$_GET["annee"];
				}
			
			if ($_GET["mois"]=="NULL" )
		{
			$month1="12";
			$month2 = date("m");
			
			}
			else{
				
			 $month1 = "12";
			$month2 =$_GET["mois"];
	
				
				}
			
			
			
			
		
		
	   $date1 = $year1."-".$month1;
		 
	 	
	   $date2 = $year2."-".$month2;
	   
	  $date1 = $date1."-"."31";
	 
	
	  $date2s = $date2."-"."31";
	 
	 $ss=31;
$y= strval(date("Y",strtotime($date2)));
$y--;
// echo ();
$date_glob = $y.'-12-31';



$date_rest = date("Y-$month2")."-31";	 
	 do{
	 $d2= $date2."-".$ss--;
	 
		}while (date("m",strtotime($date2))!=date("m",strtotime($d2)));
		
$date2=$d2;


  $requete = mysqli_query($link,"select facture.id_facture,facture.name_facture ,facture.montant_facture ,clients.Societe,clients.ref_client,facture.date ,facture.montant_ht,facture.method_paym from facture 
, clients where
facture.ref_client = clients.ref_client
 and facture.date >= '".$date1."' 
 and facture.date <= '".$date2."'
ORDER BY `facture`.`date` DESC
 ")OR DIE(mysqli_error($link));
 
$date2start=strval(date("Y-m-1",strtotime($date2)));
   $requete_facture_mois = mysqli_query($link,"select facture.id_facture,facture.name_facture ,facture.montant_facture ,clients.Societe,clients.ref_client,facture.date ,facture.montant_ht,facture.method_paym from facture 
, clients where
facture.ref_client = clients.ref_client
 and facture.date >= '".$date2start."' 
 and facture.date <= '".$date2."'
ORDER BY `facture`.`date` DESC
 ")OR DIE(mysqli_error($link));
 

  }
  
 $id_art;
  // 

  $re = "select * from articles";



//qtt_comptable
  
  
  if (isset($_GET['ref']))
{	if ($_GET['ref']==1) 
  $re= $re." ORDER BY reference";
  if ($_GET['ref']==2) 
  $re= $re." ORDER BY reference DESC";
}


  if (isset($_GET['des']))
{	if ($_GET['des']==1) 
  $re= $re." ORDER BY designation";
  if ($_GET['des']==2) 
  $re= $re." ORDER BY designation DESC";
}



  


 
  if (isset($_GET['fourn']))
{	if ($_GET['fourn']==1) 
  $re= $re." ORDER BY ref_fournisseur";
  if ($_GET['fourn']==2) 
  $re= $re." ORDER BY ref_fournisseur DESC";
}

//Prix_HT

 


//



 

//Stock_Min
  



$req=mysqli_query($link,$re);
?>

<center><h1>Trier Votre Table par Reference , Designation ou par Fournisseur en cliquant sur une de ces dernieres</h1>

</center>
<?php
if (isset($_GET["ref"])||isset($_GET["des"])||isset($_GET["fourn"]))
{?>
votre table est triée par <span style="color:#00FF99">

<?php
if (isset($_GET["ref"]))
{?>
Reference </span>  et d'Odre <span style="color:#00FF99">
<?php
if($_GET["ref"]=="1")
{?>
 A -> Z</span>
 <?php
}else
 {?>
Z -> A
 </span>
<?php
 }
 }

if (isset($_GET["des"]))
{
	
	?>
Designation </span>  et d'Odre <span style="color:#00FF99">
<?php
	if ($_GET["des"]=="1")
{?>
 A -> Z</span>
 <?php
}else
 {?>
Z -> A
 </span>
<?php
 }
 }
if (isset($_GET["fourn"]))
{?>
Fournisseur </span>  et d'Odre <span style="color:#00FF99">
<?php
if ($_GET["fourn"]=="1")
{?>
 A -> Z</span>
 <?php
}else
 {?>
Z -> A
 </span>
<?php
 }
 }
}
?>

<TABLE border="1" align="center" cellpadding="1" cellspacing="1"  >
<tr>
  



<th height="60">

<a style="color:#FFFF66" href="affiche_article.php?ref=
<?php
  if (isset($_GET['ref']))
	{
		if ($_GET['ref']==1)
			echo("2");
if ($_GET['ref']==2)
			echo("1");
	}
	else
		echo("1");
?>

">

Reference


<?php
  if (isset($_GET['ref']))
	{
		if ($_GET['ref']==1)
						echo("&#9650;");
		if ($_GET['ref']==2)
						echo("&#9660;");
}?></a>


</th>


<th>


<a style="color:#FFFF66" href="affiche_article.php?des=
<?php
  if (isset($_GET['des']))
	{
		if ($_GET['des']==1)
			echo("2");
if ($_GET['des']==2)
			echo("1");
	}
	else
		echo("1");
?>

">

Designation

<?php
if (isset($_GET['des']))
	{
		if ($_GET['des']==1)
						echo("&#9650;");
		if ($_GET['des']==2)
						echo("&#9660;");
	 }
?>
</a>

</th>





<th>Quantite Total 2012</th>
<th> 
Prix De Revient Total
</th><th> 
Prix De Vente HT Total
</th>
<th>Quantite Vendue 2012</th>
<th>Quantite vendu ce mois</th>

<th>
Quantite Reste 
</th>



<th>

<a style="color:#FFFF66" href="affiche_article.php?fourn=
<?php
  if (isset($_GET['fourn']))
	{
		if ($_GET['fourn']==1)
			echo("2");
if ($_GET['fourn']==2)
			echo("1");
	}
	else
		echo("1");
?>

">


Fournisseur

<?php
  if (isset($_GET['fourn']))
	{
		if ($_GET['fourn']==1)
						echo("&#9650;");
		if ($_GET['fourn']==2)
						echo("&#9660;");
}

?>

</a>

</th>

<th>importer X fois</th>
<th border = "0">

<table width="800px" height="100%" border="1" >
<tr height="100%">
<td width="100px" align="left" height="100%">

Detail Quantite
</td>
<td width="10%">Marge
</td>
<td width="20%" align="right">
Prix de Revient Unitaire

</td>
<td width="20%" align="right">
Prix de Revient Total

</td>
<td width="20%" align="right">
Prix De Vente Ht Unitaire

</td>
<td width="20%" align="right">
Total Ht

</td>
</tr>
</table>

</th>



</tr>
		<?php	  
		$r=1;
		while($row=mysqli_fetch_array($req))
		{
	    $id_art= $row["id_article"];
	 $req_comptable= mysqli_query($link,"SELECT * FROM `detail_fachat` where  `id_article`= '".$id_art."'")or die (mysqli_error($link));
if(mysqli_num_rows($req_comptable))
{
	 
	
	
		$ref = $row[0];
		$ref2 = $row[1];
		$codebar= $row[2];
		$des = $row[3];
	//	$QSTOK = $row[4];
	//	$QCOMPT= $row[5];
		//$STOKMIN= $row[6];
		//$PRIACHA= $row[7];
		//$Marge = $row[8];
		//$Prix_HT = $row[9];
		$ref_fournisseur= $row["ref_fournisseur"];
		$req_ref_fourn=mysqli_query($link,"SELECT *
FROM `fournisseurs`
WHERE `ref_fournisseur` = '".$ref_fournisseur."'");
		$row_req_fourn = mysqli_fetch_array($req_ref_fourn);
$fournisseur=$row_req_fourn['Societe'];
		$quant_vendu = 0;
$quant_comptab = 0;
$quantite_total=0;

//$requetqt = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
//FROM  detail_bl 
//WHERE  id_article = '$id_art'")or die (mysqli_error($link));
 


$quant_compta_rest = mysqli_query($link,"SELECT COALESCE ( SUM(tab.quantite),0) AS quant_en_Stock 
FROM ( select detail_facture.`id_article` , detail_facture.`quantite` , facture.date
FROM `detail_facture` , facture 
WHERE detail_facture.`id_article` = '$id_art' and facture.date <= '$date2' and facture.date > '$date1' 
AND detail_facture.`id_facture` = facture.`id_facture` )as tab ")or die (mysqli_error($link));

$quant_compta_glob = mysqli_query($link,"SELECT COALESCE ( SUM(tab.quantite),0) AS quant_en_Stock 
FROM ( select detail_facture.`id_article` , detail_facture.`quantite` , facture.date
FROM `detail_facture` , facture 
WHERE detail_facture.`id_article` = '$id_art' and facture.date < '$date2' 
AND detail_facture.`id_facture` = facture.`id_facture` )as tab ")or die (mysqli_error($link));

$quant_compta_mois = mysqli_query($link,"SELECT COALESCE ( SUM(tab.quantite),0) AS quant_en_Stock 
FROM ( select detail_facture.`id_article` , detail_facture.`quantite` , facture.date
FROM `detail_facture` , facture 
WHERE detail_facture.`id_article` = '$id_art' and facture.date <= '$date2' and facture.date > '$date2start' 
AND detail_facture.`id_facture` = facture.`id_facture` )as tab ")or die (mysqli_error($link));


$requetqtv_glob = mysqli_query($link,"SELECT COALESCE ( SUM(tab.qtt),0) AS quant_en_Stock 
FROM (SELECT detail_fachat.`id_article` , detail_fachat.`qtt` , facture_achat.date
FROM `detail_fachat` , facture_achat

WHERE detail_fachat.id_article = '$id_art' AND detail_fachat.`id_fachat` = facture_achat.`id_fachat` and facture_achat.date <= '$date2')as tab")or die (mysqli_error($link));


$requetqtv_rest = mysqli_query($link,"SELECT COALESCE ( SUM(tab.qtt),0) AS quant_en_Stock 
FROM (SELECT detail_fachat.`id_article` , detail_fachat.`qtt` , facture_achat.date
FROM `detail_fachat` , facture_achat

WHERE detail_fachat.id_article = '$id_art' AND detail_fachat.`id_fachat` = facture_achat.`id_fachat` and facture_achat.date <= '$date_rest' )as tab")or die (mysqli_error($link));

$row2v_glob=mysqli_fetch_array($requetqtv_glob);
$row2compta_glob=mysqli_fetch_array($quant_compta_glob);
$row2compta_mois=mysqli_fetch_array($quant_compta_mois);
$row2v_rest=mysqli_fetch_array($requetqtv_rest);
$row2compta_rest=mysqli_fetch_array($quant_compta_rest);

//$row2=mysqli_fetch_array($requetqt);
//if(mysqli_num_rows($requetqt)!=0)

$quantite_total_glob = $row2v_glob['quant_en_Stock'];
//$quant_vendu= $row2['quant_en_Stock'];
$quant_comptab_glob= $row2compta_glob['quant_en_Stock'];

$quant_comptab_mois= $row2compta_mois['quant_en_Stock'];

$quantite_total_rest = $row2v_rest['quant_en_Stock'];
//$quant_vendu= $row2['quant_en_Stock'];
$quant_comptab_rest= $row2compta_rest['quant_en_Stock'];
//$quant_en_Stock = $row2v['quant_en_Stock']-$quant_vendu;
//if($quantite_total-$quant_comptab)
	//{
		?>
		<tr>
		
        
		
        <td height="30"  align="center">
		<?php echo $ref2?>
			
        </td>
        	<td height="40" align="center">
			<?php echo $des;?>
        	</td>      
                 <td align="center"><?php  echo("".$quantite_total_glob-$quant_comptab_glob ); ?></td>
                 
         <?php
	
	$total_qtt=0;
	$total_total_rev=0;
$total_total_ht=0;
$req_historique_importation = mysqli_query($link,"SELECT `articles`.`reference` , `detail_fachat`.`qtt` , `detail_fachat`.`id_detachat`,`detail_fachat`.`prix_rev` ,`detail_fachat`.`marge` , `facture_achat`.`ref_fournisseur` , `facture_achat`.`date` ,  `fournisseurs`.`Societe`
FROM detail_fachat, facture_achat, fournisseurs, `articles`
WHERE fournisseurs.`ref_fournisseur` = facture_achat.`ref_fournisseur`
AND detail_fachat.`id_fachat` = facture_achat.`id_fachat` 
AND `articles`.`id_article` = detail_fachat.`id_article` and  detail_fachat.`id_article` = '".$id_art."' ORDER BY facture_achat.date")or die(mysqli_error($link));
	if (mysqli_num_rows($req_historique_importation))
{	 
	while($row_historique_importation=mysqli_fetch_array($req_historique_importation))
{	 
	$marge= $row_historique_importation["marge"];
      $prix_rev= $row_historique_importation["prix_rev"];
	  
	  $quantite = $row_historique_importation["qtt"];
	  $total_total_rev=$total_total_rev+$prix_rev*$quantite;
$prix=$prix_rev+($prix_rev*$marge/100);
	  $total_total_ht=$total_total_ht+$prix*$quantite;
}}

?>
<td align="center">
       <?php

echo(number_format($total_total_rev, 2, '.', ''));
		 ?>  
         </td>
         <td>

<?php

echo(number_format($total_total_ht, 2, '.', ''));
		 ?>
         </td>
         <td><?php  echo("".$quant_comptab_rest ); ?></td>
         <td><?php echo($quant_comptab_mois);?></td>  
         <td>
		 
		 
         <span class="modif">  <a  style="text-decoration: none;
	color: #9F0;"  href="../factures/acheteurs_article_factures.php?id_article=<?php 
echo($id_art);
?>"><?php  echo("".$quantite_total_glob-$quant_comptab_glob-$quant_comptab_rest ); ?></a></span>
         
         
         </td>
          <td height="30" align="center">
				<?php  echo $fournisseur?>
		  </td>
     
          <td align="center"><?php 
		  $req_nbr_importation =  mysqli_query($link,"SELECT COUNT( * ) AS `Lignes` , `id_article`
FROM `detail_fachat` where id_article = '".$id_art."'
GROUP BY `id_article`
ORDER BY `id_article`")or die (mysqli_error($link));
$row_nbr_importation = mysqli_fetch_array($req_nbr_importation);
echo($row_nbr_importation['Lignes']);
		  ?></td>
        
          <td align="center"><?php
          	$qtt_prix=0;
//$prix=	$result['Prix_HT'];
$rest=$quantite_total_glob-$quant_comptab_glob;

//die("".$rest);
$req_prix = mysqli_query($link,"SELECT  detail_fachat.id_article,detail_fachat.qtt, detail_fachat.prix_rev, detail_fachat.marge, detail_fachat.id_fachat, facture_achat.date
FROM detail_fachat, facture_achat
WHERE detail_fachat.id_fachat = facture_achat.id_fachat
AND detail_fachat.id_article ='".$id_art."'
ORDER BY `facture_achat`.`date` DESC
") or die (mysqli_error($link));
$s=0;
if( mysqli_num_rows($req_prix))
{

$qt=$rest;
$all_qt = $qt;
while($row_req_prix =mysqli_fetch_array($req_prix)) 	
	{
	
	if($qt>0)
{	

$qtt_prix=$qtt_prix+$row_req_prix["qtt"] ;		

		
		

?>

<table width="800px"  border="1" >
<tr>
  <td width="10%" align="left" valign="middle">
<?php

if($qt>$qtt_prix )
{	

	
	echo ("".$qtt_prix."");
}
else
{


echo ("".$qt."");

}

?></td>
<td width="10%" align="left" valign="middle">
<?php
echo ("".number_format($row_req_prix["marge"], 0, '.', ' ')."");
?>
</td>
<td width="20%" align="right" valign="middle"><?php

echo ("".number_format($row_req_prix["prix_rev"],2, '.', ' ')."");?>
</td>
<td width="20%" align="right" valign="middle">
<?php
$prix_rev=$row_req_prix["prix_rev"];

if($qt>$qtt_prix )
{	
$prix_rev_total= $qtt_prix*$prix_rev;

	echo ("".number_format($prix_rev_total, 2, '.', ' ')."");
	
}
else
{
$prix_rev_total= $qt*$prix_rev;

echo ("".number_format($prix_rev_total, 2, '.', ' ')."");


}

?>
<?php



?>
</td>

<td width="20%" align="right" valign="middle"><?php

$prix_ht = $row_req_prix["prix_rev"]+$row_req_prix["prix_rev"] *( $row_req_prix["marge"]/100);
echo ("".number_format($prix_ht, 2, '.', ' ')."");

?>
</td>
<td width="20%" align="right" valign="middle"><?php
//echo ("".$qt*($row_req_prix["prix_rev"]+$row_req_prix["prix_rev"] *( $row_req_prix["marge"]/100))."");
if($qt>$qtt_prix )
{
$prix_ht_total= $qtt_prix*$prix_ht;

echo ("".number_format($prix_ht_total, 2, '.', ' ')."");

	$qt =	$qt - $qtt_prix;

}
else
{
$prix_ht_total=$qt*$prix_ht;
	echo ("".number_format($prix_ht_total, 2, '.', ' ')."");
$qt = 0;

}
?></td>
</tr>
</table>
<?php

	}
}}


  ?>
  

		<?php
		
		}
		}

?>
</TABLE>
  
  
  
 </div>  

    <!-- end .container -->
 
 
    </div>
   	    <script type = "text/javascript" src = "design/jquery.js"> </script> 
	
   <script type="text/javascript" > 
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", 
imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</center>

</body>
</html>