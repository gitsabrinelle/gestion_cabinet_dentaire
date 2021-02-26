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
 </div> 
 </center>
    <br /><br /><br /> 
       <?php   
	session_start();
 
 

	
	?>  
 </div>






<div class =  "content">

<?php
if(isset($_SESSION['username']))
{	
include '../global.php';
$total_qtt=0;
$total_total_ht=0;
$total_total_rev=0;
if (isset($_GET['id_article']))
{
$id_article = $_GET['id_article'];
$i=0;
 ?>
  
<hr />
<br />
<table width="65%" border="2" align="center">
<?php
$total_qtt=0;
$total_total_ht=0;
$string_query = "SELECT
 `articles`.`reference` , 
 `detail_fachat`.`qtt` ,
 `detail_fachat`.`id_detachat`,
 `detail_fachat`.`prix_achat` ,
 `detail_fachat`.`prix_vente` ,
 `facture_achat`.`ref_fournisseur` ,
 `facture_achat`.`date` , 
 `fournisseurs`.`Societe`
FROM detail_fachat, facture_achat,  fournisseurs, `articles`
WHERE fournisseurs.`ref_fournisseur` = facture_achat.`ref_fournisseur`
AND detail_fachat.`id_fachat` = facture_achat.`id_fachat`
AND `articles`.`id_article` = detail_fachat.`id_article` and  articles.id_article = '".$id_article."' ORDER BY facture_achat.date";
// die ($string_query);
$req_historique_importation = mysqli_query($link,$string_query)or die(mysqli_error($link));
if (mysqli_num_rows($req_historique_importation))
{
?>
<tr>
<th>Reference  </th>
<th>Fournisseur 
</th>
<th>Date Achat 
</th><th>Quantite
</th>
<th>prix d'achat uni</th>
<th>prix d'achat Total</th>
<th>prix de vente uni </th>
 
<th>Total vente 
</th>

</tr>
<?php	
$min_prix=0;
$max_prix=0;

while($row_historique_importation=mysqli_fetch_array($req_historique_importation))
{
//$id_fachat = $row_historique_importation["id_fachat"];
$reference = $row_historique_importation["reference"];
$quantite = $row_historique_importation["qtt"];


$prix_achat= $row_historique_importation["prix_achat"];
$prix_vente= $row_historique_importation["prix_vente"];


if($min_prix>$prix_achat)
$min_prix=0;

if($max_prix==0)
$max_prix=$prix_achat;

if($min_prix==0)
$min_prix=$prix_achat;

if($max_prix<$prix_achat)
$max_prix=$prix_achat;


$date=  $row_historique_importation["date"];
$societe =  $row_historique_importation["Societe"];
$ref_fournisseur = $row_historique_importation[ "ref_fournisseur"];
	
	?>


<tr>
<td><span style ="color : orange;"><?php
echo ($reference);
?><span></td>
<td><?php
echo ($societe);
?></td>
<td><?php echo("".date("d-m-Y", strtotime($date)));
?></td>
<td><?php 
echo ($quantite);
?></td>

<td><?php 
echo ($prix_achat);
?></td>
<td><?php 
echo ($quantite*($prix_achat));
?></td>
<td><?php 
echo ($prix_vente);
?></td>
 

<td><?php 

echo ($prix_vente*$quantite);
$total_qtt=$total_qtt+$quantite;
$total_total_ht=$total_total_ht+$prix_vente*$quantite;
$total_total_rev=$total_total_rev+$prix_achat*$quantite;

?></td>


</tr>
<?php
}
?>
<tr>
<td>Totaux</td>
<td></td><td></td>

<td><?php

 echo($total_qtt);?></td><td></td>
 <td><?php echo($total_total_rev);?></td>
 <td></td>
<td><?php echo($total_total_ht);?></td>

</tr>

<?php

?>
</table>
<br /><br />
<hr />
<table border = "2" align = "Center">
<tr>
<th>
Quantité achetée Totale :</th>
 <th> Prix d'achat total  :</th>
<th> Prix de Vente total  : </th>

</tr>
<tr>
 <?php 
$quant_en_Stock = 0;
$quant_vendu = 0;
$quant_comptab = 0;
$quantite_total=0;
$id_art=$id_article;
$requetqt = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_bl 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));
 

$requetqtv = mysqli_query($link,"SELECT COALESCE(SUM(qtt),0) AS quant_en_Stock
FROM  detail_fachat 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));

$row2v=mysqli_fetch_array($requetqtv);
 

$row2=mysqli_fetch_array($requetqt);
//if(mysqli_num_rows($requetqt)!=0)
$quantite_total = $row2v['quant_en_Stock'];
$quant_vendu= $row2['quant_en_Stock'];
 
$quant_en_Stock = $row2v['quant_en_Stock']-$quant_vendu;
?>
<td>
<?php
echo(" ".$quantite_total );

 ?></td><td>
<?php echo($total_total_rev);?>
</td>
<td>
<?php echo($total_total_ht);?>
</td>

</tr>


</table>
<br>
<hr />
<br />
 
 
</table>

<br>
 
<br />
<?php
$req_pre=mysqli_query($link,"SELECT COUNT( * ) AS `Lignes` , `id_article` , `prix_achat` , `prix_vente`
FROM `detail_fachat`
WHERE `prix_achat` < $max_prix
GROUP BY `id_article`
ORDER BY `detail_fachat`.`prix_achat` DESC
LIMIT 0 , 1")or die (mysqli_error($link));
$req_suiv=mysqli_query($link,"SELECT COUNT( * ) AS `Lignes` , `id_article` , `prix_achat` , `prix_vente`
FROM `detail_fachat`
WHERE `prix_achat` > $min_prix 
GROUP BY `id_article`
ORDER BY `detail_fachat`.`prix_achat` ASC
LIMIT 0 , 1")or die (mysqli_error($link));

$row_pre= mysqli_fetch_array($req_pre);
$row_suiv=mysqli_fetch_array($req_suiv);

$id_article_pre=$row_pre["id_article"];
$id_article_suiv=$row_suiv["id_article"];
// echo(($total_total_ht));
?> 
<table align="center">
<tr >
<th  style="width:30%;"><a style="text-decoration: none;
	color: #9F0;" href="mouvements_article.php?id_article=<?php 
echo ($id_article_pre);

?>">Article precedant </a></th>
<th  style="width:40%;">
</th>
<th style="width:30%;" ><a style="text-decoration: none;
	color: #9F0;" href="mouvements_article.php?id_article=<?php 
echo ($id_article_suiv);

?>">Article Suivant </a>
 </th>
</tr>
</table>
<hr />


<?php

}
else echo "no achat ";
}}
else
	header("Location:../login.php");

?>

    

    <!-- end .container -->
 
 </div>
 </div>
 
  
<script type = "text/javascript" src = "design/jquery.js"> 
</script> 

<script type="text/javascript"> 
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", 
imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
</script>


</body>
</html>