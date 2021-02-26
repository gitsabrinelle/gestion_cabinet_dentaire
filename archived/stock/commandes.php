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
    <br /> 
	
     <?php
	
include("../global.php");

function delet_article($id_article,$link)
{
	$result = false ;
	$query = mysqli_query($link,"
	 select(SELECT COALESCE(SUM(qtt),0) AS quant_total
FROM  detail_fachat 
WHERE  id_article = '$id_article')as article_achete
,  (SELECT COALESCE(SUM(quantite),0) AS quant_vendu
FROM  detail_bl 
WHERE  id_article = '$id_article'
)as article_vendu  


 
")or die (mysqli_error($link));
		


 if (mysqli_num_rows($query))
	
	{
		$row = mysqli_fetch_array($query);
		if ($row ["article_vendu"] === "0" && $row ["article_achete"]=== "0")
			$result = true ;
		
		
		
	}	

	
	return $result;
	}


 $id_art;
 $ref_fournisseur="";
  
$re="select * from articles   ";
  
  if(isset($_GET["ref_fournisseur"]))
  {
  $ref_fournisseur=$_GET["ref_fournisseur"];
$re=$re."  where ref_fournisseur= '".$ref_fournisseur."' ";
  }else 
{
	
	}
 



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


 
 

//Prix_HT

 

//

$plage = "";



$re = "
/*
 // SELECT 
		  // detail_fachat.id_article as id_article,
		// reference,
		// designation,
		// COALESCE(sum(qtt),0) as qtt_total ,
		// COALESCE(sum(quantite),0)  as qtt_vendu,
		// COALESCE(sum(qtt),0)-COALESCE(sum(quantite),0)  as qtt_rest , 
		// round((COALESCE(sum(qtt),0)-COALESCE(sum(quantite),0))*100 / COALESCE(sum(qtt),0)) as rest_pourcentage , 
		// Societe,
		// emplacement
// FROM 
		// detail_fachat

// left outer join facture_achat
				// on facture_achat .id_fachat = `detail_fachat` .id_fachat
// 
// left outer join articles
				// on articles .id_article = `detail_fachat` .id_article

// left outer join detail_bl
				// on  articles .id_article = `detail_bl` .id_article

// left outer join fournisseurs
				// on  articles .ref_fournisseur = `fournisseurs` .ref_fournisseur

// group by detail_fachat.id_article ,Societe,reference,
		// designation,emplacement*/
SELECT 	achat.id_article, 
		reference,
		designation,
		achat.quant_en_Stock as qtt_total, 
		COALESCE( vente.quant_vendu , 0 ) AS qtt_vendu,
		COALESCE( achat.quant_en_Stock , 0 )-COALESCE( vente.quant_vendu , 0 ) as qtt_rest,
		round((COALESCE(achat.quant_en_Stock,0)-COALESCE(vente.quant_vendu,0))*100 / COALESCE(achat.quant_en_Stock,0)) as rest_pourcentage , 
		articles.Societe,
		emplacement

FROM (	SELECT 
      			id_article, 
      			COALESCE( SUM( detail_fachat.qtt ) , 0 ) AS quant_en_Stock, 
      			prix_achat
		FROM detail_fachat
 		GROUP BY  `detail_fachat`.`id_article`
	 )achat
LEFT JOIN (
			SELECT 
			    	id_article, 
    				COALESCE( SUM( detail_bl.quantite ) , 0 ) AS quant_vendu
			FROM detail_bl
			GROUP BY  `detail_bl`.`id_article`
		   )vente ON achat.id_article = vente.id_article
LEFT JOIN (
			SELECT 
			    	id_article, 
    				reference,
					designation,
    				emplacement,
    				societe
			FROM articles
    		LEFT JOIN (
			SELECT 
			    	ref_fournisseur, 
    				Societe
			FROM fournisseurs
			GROUP BY  `fournisseurs`.`ref_fournisseur`
		   )fournisseurs ON  fournisseurs.ref_fournisseur = `articles`.`ref_fournisseur`



			GROUP BY  `articles`.`id_article`
		   )articles ON achat.id_article = articles.id_article



";
if (  isset($_GET['plage'])) 
	$plage = $_GET['plage'];



if ($plage ==="0")
					$re =$re . " 
				having round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) = 0  ";

	else if ($plage ==="0to50")
					$re =$re . "
				having  round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) <= 50 and  round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) >0
				
				";

		 else if ($plage ==="50to100")
					$re =$re . "
				having  round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) <100 and  round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) >50";
				
			  else if ($plage ==="100")
					$re =$re . "
				having round((COALESCE(qtt_total,0)-COALESCE(qtt_vendu,0))*100 / COALESCE(qtt_total,0)) = 100 ";

// $re =$re . "
// ORDER BY `rest_pourcentage`  ASC";
$req=mysqli_query($link,$re)or die (mysqli_error($link));
?>
 <center>
  resultat : <?php echo mysqli_num_rows ($req);?> articles ..
<br>
<form action = "#" method ="GET"> 
 <select name = "plage" >
 <option <?php if ($plage ==="0"){?>   selected <?php }?>value = "0" >Rest 0% (tout Vendu)</option>
 <option <?php if ($plage ==="0to50"){?>   selected <?php }?> value = "0to50" >Rest 1% à  50%</option>
 <option <?php if ($plage ==="50to100"){?>   selected <?php }?> value = "50to100" >Rest 51% à 99%</option>
 <option <?php if ($plage ==="100"){?>   selected <?php }?> value = "100" > Rest 100%(Jamais Vendu)</option> 
 <option <?php if ($plage ==="tous"){?>   selected <?php }?> value = "tous" > Tous</option>
 </select>
 <input type = "submit" value ="Rechercher" />
 </form>
 </center>
<?php
 if (mysqli_num_rows ($req))
 {?>

<TABLE border="1" align="center" >
<tr>
  



<th height="60">

<a style="color:#FFFF66" href="stock.php?ref=
<?php  if (isset($_GET['ref']))
	{
		if ($_GET['ref']==1)
			echo("2");
		else if ($_GET['ref']==2)
			echo("1");
	}
	else
		echo("1");?>">

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


<a style="color:#FFFF66" href="stock.php?des=
<?php
  if (isset($_GET['des']))
	{
		if ($_GET['des']==1)
			echo("2");
if ($_GET['des']==2)
			echo("1");
	}
	else
		echo("1");?>">

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

<th>
Qtt Achetée 
</th>
<th>
Quantite Vendu 
</th>
<th>Rest</th>
<th>%</th>
<th>Emplacement</th>

 





<th>

<a style="color:#FFFF66" href="stock.php?fourn=
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
<th>Supprimer</th>

</tr>
		<?php	  
		$r=1;
		while($row=mysqli_fetch_array($req))
		{
			$id_art= $row["id_article"];
	   // $ref = $row[0];
		$ref2 = $row["reference"];
		// $codebar= $row["code_bare"];
		$des = $row["designation"];
		 // $ref_fournisseur= $row["ref_fournisseur"];
		// $req_ref_fourn=mysqli_query($link,"SELECT *
// FROM `fournisseurs`
// WHERE `ref_fournisseur` = '".$ref_fournisseur."'");
		// $row_req_fourn = mysqli_fetch_array($req_ref_fourn);
$fournisseur=$row['Societe'];
			
			
			
			
				$quant_en_Stock = 0;
$quant_vendu = 0;
 
$quantite_total=0;

// $requetqt = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_vendu
// FROM  detail_bl 
// WHERE  id_article = '$id_art'")or die (mysqli_error($link));


// $requetqtv = mysqli_query($link,"SELECT COALESCE(SUM(qtt),0) AS quant_total
// FROM  detail_fachat 
// WHERE  id_article = '$id_art'")or die (mysqli_error($link));

// $row2v=mysqli_fetch_array($requetqtv);


// $row2=mysqli_fetch_array($requetqt);

$quantite_total = $row['qtt_total'];
$quant_vendu= $row['qtt_vendu'];
$quant_en_Stock = $row['qtt_rest'];
$rest_pourcentage = $row['rest_pourcentage'];
$emplacement = $row['emplacement'];
	//
	{	
			?>
		<tr>
		
        
		
        <td height="30"  align="center"> <a  class = "linkcolor"  href="../bl/acheteurs_article_bl.php?id_article=<?php 
 
echo $id_art?>">
		<?php echo $ref2?>
			</a>
        </td>
        	<td height="40" align="center">
		<a style="color:#33FFFF" href="../stock/update-designation.php?search=<?php echo("$ref2");?>">	<?php echo $des;?><img src="design/pics/modifier.png" width="16" height="16" longdesc="" />
		</a>
        	</td>
		
            
			
	
        	<td height="30" align="center">
				<?php 
echo(" ".$quantite_total ); 
?>
			</td><td height="30" align="center">
				<?php  echo("".$quant_vendu ); ?>
			</td>
			<td align="center"><?php  echo("".$quant_en_Stock ); ?>
			</td> 
			<td align="center"><?php  echo("".$rest_pourcentage ); ?>
			</td> 
           <td align="center"><?php  echo("".$emplacement ); ?>
			</td> 
           
			<td height="30" align="center">
				<?php 
				
				echo $fournisseur?>
			</td>
			<td align="center">
            <?php
      if (delet_article($id_art,$link)){
	  ?><a onclick="if(confirm('Etes vous sûr de vouloir supprimer cet article ?')) document.location='delete_article.php?id_article=<?php echo("".$id_art);?>';" href="#"><img src="design/pics/delete.png" width="16" height="16" alt="Supprimer cet ligne" /></a>
      <?php
	}?>
   
            </td>
		
	
		</tr>
		<?php
		
	}}

?>
</TABLE>
  
 <?php
 }
 else 
	 echo "vous n'avez Rien acheter pour votre magasin";
 ?> 
  
 </div>
 </div>
   	    <script type = "text/javascript" src = "design/jquery.js"> </script> 
	
   <script type="text/javascript" > 
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", 
imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</center>

</body>
</html>