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
 
 
 
<div class="sidebar1">
 <center>
 <div id ="menu">
   <ul id="MenuBar1" class="MenuBarHorizontal">
     <li><a href="../" class="MenuBarItemSubmenu">Acceuil</a>       </li>
</ul>
 </div> </center>
   <br>
	
     <?php
	
include("../global.php");
$qtt_total=0;
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
////////////////////////////////////////////////////////////////////////////////////

 $id_art;
 $ref_fournisseur="";
  
$re="select * from articles   ";

   if(isset($_GET["emplacement"]))
  {
  $emplacement=$_GET["emplacement"];
  if (strlen($_GET["emplacement"]))
$re=$re."  where emplacement like '%".$emplacement."%' ";
else 
$re=$re."  where CHAR_LENGTH(emplacement) = 0 or emplacement = ' 'or emplacement = '	' or emplacement is NULL ";
	


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







$req=mysqli_query($link,$re)or die (mysqli_error($link));

	$req2=mysqli_query($link," SELECT COUNT( * ) AS  `Lignes` ,  trim(`emplacement`) as emplacement
FROM  `articles` 
GROUP BY  `emplacement` 
ORDER BY  `emplacement`")or die (mysqli_error($link));
?>

 <table width="45%" align="center" border = "2">
<form action = "emplacement.php" method = "GET" >
 
<tr>
  <th nowrap="nowrap">  Emplacement </th>
    <td nowrap="nowrap">
	<?php
	

if(mysqli_num_rows($req2))
{
	?>
	
	<select name = "emplacement">
	<?php
	
	
while($row = mysqli_fetch_array($req2))
{
	
	
$emplacement= $row["emplacement"];
$qtt_total= $row["Lignes"];

// $qtt_total=;
// $Societe= $row["Societe"];
 

	?>
	<option value = "<?php echo  trim($emplacement) ;?>"
	<?php 
if (isset($_GET["emplacement"]))
	
	if ($emplacement === $_GET["emplacement"])
{?>
selected 
	<?php }?>><?php echo  trim($emplacement); ?></option>

<?php

}
?>

	</select>
	<?php
	
}
	?>
 
      </td>
  </tr>    
   <tr>
   <td>QTT Vendu</td>
   <td><input name = "vendu"type="checkbox" >
   
   </td>
   
   
   </tr>    
   <tr>
<td>&nbsp;</td>


 <td>
 <ul>
 <input class= "bt" type = "submit" value  = "Rechercher" />
 </ul>

 </td>
</tr>

</form>

 </table>
<br>
<?php
if (isset($_GET["emplacement"]))
{
 
 
// <center><h1>Emplacement:<span style="color:yellow ;text-align:center;"><strong> 
 
// echo $_GET["emplacement"];


 
// </strong></span>
 // Nombre de references : <span style="color:yellow"><strong> <?php echo mysqli_num_rows($req);
 
 // </h2>
// </strong></span></center>
  } 
 // <br>
 
 if (isset($_GET["emplacement"]))
{

 ?>
 
 Total : <?php
 echo mysqli_num_rows($req);
 ?>
<TABLE border="1" align="center" >
<tr>
  



<th height="60">

<a style="color:#FFFF66" href="emplacement.php?ref=
<?php
  if (isset($_GET['ref']))
	{
		if ($_GET['ref']==1)
			echo("2");
if ($_GET['ref']==2)
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


<a style="color:#FFFF66" href="emplacement.php?des=
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

<th>Quantité</th>

 





<th>

<a style="color:#FFFF66" href="emplacement.php?fourn=
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
		$codebar= $row["code_bare"];
		$des = $row["designation"];
		//$QSTOK = $row[4];
		//$QCOMPT= $row[5];
		//$STOKMIN= $row[6];
		//$PRIACHA= $row[7];
		//$Marge = $row[8];
		$Prix_HT = $row["Prix_HT"];
		$ref_fournisseur= $row["ref_fournisseur"];
		$req_ref_fourn=mysqli_query($link,"SELECT *
FROM `fournisseurs`
WHERE `ref_fournisseur` = '".$ref_fournisseur."'");
		$row_req_fourn = mysqli_fetch_array($req_ref_fourn);
$fournisseur=$row_req_fourn['Societe'];
			
			
			
			
				$quant_en_Stock = 0;
$quant_vendu = 0;
 
$quantite_total=0;

$requetqt = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_vendu
FROM  detail_bl 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));


$requetqtv = mysqli_query($link,"SELECT COALESCE(SUM(qtt),0) AS quant_total
FROM  detail_fachat 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));

$row2v=mysqli_fetch_array($requetqtv);


$row2=mysqli_fetch_array($requetqt);

$quantite_total = $row2v['quant_total'];
$quant_vendu= $row2['quant_vendu'];
$quant_en_Stock = $quantite_total-$quant_vendu;
	if (isset($_GET["vendu"]))
	$vendu  = $_GET["vendu"];
	
	if (($quant_en_Stock && !isset($_GET["vendu"])  )or (isset($_GET["vendu"]) && $quant_en_Stock ==0))
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
		
      
			<td align="center"><?php  echo("".$quant_en_Stock ); ?>
			</td> 
           
			<td height="30" align="center">
				<?php echo $fournisseur?>
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