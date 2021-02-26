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

 $id_art;
  // 

  $re = "select * from articles";
"SELECT COUNT( * ) AS  `Lignes` ,  `id_article` 
FROM  `detail_facture` 
GROUP BY  `id_article` 
ORDER BY  `Lignes` DESC ";


//qtt_comptable
  if (isset($_GET['qtt_comptable']))
{	if ($_GET['qtt_comptable']==1) 
  $re= $re." ORDER BY Qtt_comptable";
  if ($_GET['qtt_comptable']==2) 
  $re= $re." ORDER BY Qtt_comptable DESC";
}

  
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



  if (isset($_GET['qnt']))
{	if ($_GET['qnt']==1) 
  $re= $re." ORDER BY quant_en_Stock";
  if ($_GET['qnt']==2) 
  $re= $re." ORDER BY quant_en_Stock DESC";
}


  if (isset($_GET['code_bare']))
{	if ($_GET['code_bare']==1) 
  $re= $re." ORDER BY code_bare";
  if ($_GET['code_bare']==2) 
  $re= $re." ORDER BY code_bare DESC";
}
 
 
  if (isset($_GET['fourn']))
{	if ($_GET['fourn']==1) 
  $re= $re." ORDER BY ref_fournisseur";
  if ($_GET['fourn']==2) 
  $re= $re." ORDER BY ref_fournisseur DESC";
}

//Prix_HT

  if (isset($_GET['Prix_HT']))
{	if ($_GET['Prix_HT']==1) 
  $re= $re." ORDER BY Prix_HT";
  if ($_GET['Prix_HT']==2) 
  $re= $re." ORDER BY Prix_HT DESC";
}


  if (isset($_GET['Marge']))
{	if ($_GET['Marge']==1) 
  $re= $re." ORDER BY Marge";
  if ($_GET['Marge']==2) 
  $re= $re." ORDER BY Marge DESC";
}

//



 if (isset($_GET['Prix_Achat']))
{	if ($_GET['Prix_Achat']==1) 
  $re= $re." ORDER BY Prix_achat";
  if ($_GET['Prix_Achat']==2) 
  $re= $re." ORDER BY Prix_achat DESC";
}

//Stock_Min
  if (isset($_GET['Stock_Min']))
{	if ($_GET['Stock_Min']==1) 
  $re= $re." ORDER BY Stock_min";
  if ($_GET['Stock_Min']==2) 
  $re= $re." ORDER BY Stock_min DESC";
}




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

<TABLE border="1" align="center" >
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

<th>
Qtt Total 2012
</th>
<th>
Quantite vendue (BL)
</th>

<th>
Quantite vendue (Facture)
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
		$QSTOK = $row[4];
		$QCOMPT= $row[5];
		$STOKMIN= $row[6];
		$PRIACHA= $row[7];
		$Marge = $row[8];
		$Prix_HT = $row[9];
		$ref_fournisseur= $row[10];
		$req_ref_fourn=mysqli_query($link,"SELECT *
FROM `fournisseurs`
WHERE `ref_fournisseur` = '".$ref_fournisseur."'");
		$row_req_fourn = mysqli_fetch_array($req_ref_fourn);
$fournisseur=$row_req_fourn['Societe'];
			?>
		<tr>
		
        
		
        <td height="30"  align="center">
		<?php echo $ref2?>
			
        </td>
        	<td height="40" align="center">
		<a style="color:#33FFFF" href="update-designation.php?search=<?php echo("$ref2");?>">	<?php echo $des;?><img src="design/pics/modifier.png" width="16" height="16" longdesc="" />
		</a>
        	</td>
		
            
			
	
        	
           
			<td height="30" align="center">
				<?php $quant_en_Stock = 0;
$quant_vendu = 0;
$quant_comptab = 0;
$quantite_total=0;

$requetqt = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_bl 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));

$quant_compta = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_facture 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));

$requetqtv = mysqli_query($link,"SELECT COALESCE(SUM(qtt),0) AS quant_en_Stock
FROM  detail_fachat 
WHERE  id_article = '$id_art'")or die (mysqli_error($link));

$row2v=mysqli_fetch_array($requetqtv);
$row2compta=mysqli_fetch_array($quant_compta);

$row2=mysqli_fetch_array($requetqt);
//if(mysqli_num_rows($requetqt)!=0)
$quantite_total = $row2v['quant_en_Stock'];
$quant_vendu= $row2['quant_en_Stock'];
$quant_comptab= $row2compta['quant_en_Stock'];
$quant_en_Stock = $row2v['quant_en_Stock']-$quant_vendu;
echo(" ".$quantite_total ); ?>
			</td><td height="30" align="center">
				<?php  echo("".$quant_vendu ); ?>
			</td><td height="30" align="center">
				<?php echo(" ".$quant_comptab); ?>
			</td><td height="30" align="center">
				<?php  echo $fournisseur?>
			</td>
		
	
		</tr>
		<?php
		}}

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