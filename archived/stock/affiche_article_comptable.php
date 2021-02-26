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
  ?>  <br />    <br /> 
    Selectionner  mois et année <br />
    <br /> 
 *   Laisser le mois vide pour voir l' inventaire du stock d'année selectionnée
        <br />
       *   Laisser l'année vide pour voir l'etat du stock global
        depuis 31-12-2011<br /> 
   <br /><br /> 
 
<?php
	 
  ?>
    <form method="GET" action="affiche_article_comptable_date.php">

  <table width="45%" border="2" align="center">
  <tr height="50">
  <td>
<select name = "mois" >
<option value = "<?php echo("NULL");?>"    ><?php echo(" ");?>
<option value = "<?php $i=1;echo($i++);?>"<?php  if ($i == date ("m")){?>  selected="selected"<?php }?>>Janvier
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Fevrier
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Mars
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Avril
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Mai
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Juin
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Juillet
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Aout
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Septembre
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Octobre
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Novembre
</option>
<option value = "<?php echo($i++);?>"<?php if ($i == date ("m")){?>  selected="selected"<?php }?>>Decembre
</option>
</select>
</td>
<td valign="middle">
<select name = "annee" >
<option value = "<?php echo("NULL");?>" ><?php echo(" ");?>
<?php
for($ii= 2012;$ii<date("Y")+1;$ii++)
{
?>
<option value = "<?php echo("".$ii);?>" <?php  if ($ii == date ("Y")){?>  selected="selected"<?php }?>><?php echo("".$ii);?>
</option>
<?php
}
?></select>

</td>


</tr>
<tr>
<td></td>
<td>

<input style=" width:100px ; height:50px;" type="submit" value = "Envoyer"/>
</td>
</tr>
</table >
</form>
</br></br></br></br></br></br>
 
  
  
  
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