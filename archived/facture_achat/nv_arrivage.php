﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logiciel de Stock</title>
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
  <center>
<div class="sidebar1">
 <center>
 <div id ="menu">
   <ul id="MenuBar1" class="MenuBarHorizontal">
     <li><a href="../index.php" class="MenuBarItemSubmenu">Acceuil</a>       </li>
</ul>
 </div> </center>
    <br /><br /><br /> 
<?php
include("../global.php");
?>


<?php
$req_fournisseur=mysqli_query($link,"select * from fournisseurs");
$num_req_fournisseur = mysqli_num_rows($req_fournisseur);
if(!$num_req_fournisseur)
	echo"Pas De Fournisseurs !!";
else 
{
		
?>

<form method="GET" action="nouvel_arrivage_confirm.php">
<br />
<br />

<table border="2" align="center">
<tr>
<td>Date d'achat 
</td>
<td>:
</td>
<td align="center">
<input style="width:150px;text-align:center" type="text" name = "date" value="<?php 
echo date("d-m-Y");
?>" />
</td>
</tr>
<tr>
<td>
Fournisseur </td>
<td>
:
</td>
<td width="300" align="center">
<select name="ref_fournisseur" style="text-align:center">
<?php
while($row_req_fournisseur=mysqli_fetch_array($req_fournisseur))
	{
?>
<center><option style="text-align:center" value = "<?php echo $row_req_fournisseur["ref_fournisseur"];?>">
<?php
echo $row_req_fournisseur["societe"];
?>
</option></center>
<?php
}
?>
</select>
</td>

</tr>
<tr>
<td>Facturation  </td>
<td>:</td>
<td><input name= "Facturation"type="checkbox" checked="checked" disabled /></td></tr>
<tr>
<td>Magasin  </td>
<td>:</td>
<td><input name= "magasin" type="checkbox" checked="checked" disabled /></td></tr>
<tr>
<td></td>
<td>&nbsp;</td>
<td><input type="submit" value="Suivant" /></td>
</tr>
</table>
</form>
<br />
<br />
<br />

<?php		
		
		
	
	
	
	}	
?>

</div>
   <script type = "text/javascript" src = "design/jquery.js"> </script> 
	
   <script type="text/javascript" > 
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", 
imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</center>
</div>
</body>
</html>