
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  Logiciel De Stock </title>
<link href="design/style2.css" rel="stylesheet" type="text/css" />
<script src="design/spryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="design/spryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">

 <div class="header" id="header"></div>


<div class="sidebar1">

 <div id ="menu">
   <ul id="MenuBar1" class="MenuBarHorizontal">
     <li><a href="../index.php" class="MenuBarItemSubmenu">Acceuil</a></li>
</ul>
 </div>
    <br /><br /><br />  </div>

 


<div class="content">
  <div id = "date">


  </div>
<hr />
  


<br />
</div>  

        <?php   
	
	    ob_start();
    $error = "Problem connecting";
    $link = mysqli_connect('localhost','root','') or die($error);
    mysqli_select_db($link,'dap2');
		//  mysqli_select_db($link,'dap2') or header("Location:index.php");
		session_start();
			  $search="";
	   if (isset (  $_GET["search"]))
 $search = $_GET["search"];
	  else  if (isset (  $_POST["search"]))
 $search = $_POST["search"];
$id_article;
function image_exists($id_article)
{
	$result = false;
		
		
$req_montant= mysqli_query($link,"

select
*	
  
  from articles_images
  where id_article = '$id_article'  ")or die (mysqli_error($link));
if (mysqli_num_rows($req_montant))
{ 
while ($row = mysqli_fetch_array($req_montant))
		
	$result =  $row["id_image"];
	
	}
	 
		
		return $result;	
	 	}


 if(isset($_SESSION['username']))  
{  




   
    if( isset($_POST['submit']) ) 
   {
	 
 if (isset ($_POST["id_article"]))
 $id_article = $_POST["id_article"];
 echo $id_article;
      include('SimpleImage.php');
	
   include('resize/randWord.php');
   
   
   
   $image = new SimpleImage();
   $name = $_FILES['uploaded_image']['tmp_name'];
//echo($name);
   if (!$name=="")
   {
   $numberType = $image->load($name);
	
	//$image->resize(300,300);
   do
   {
   $tempName = rand_name(); 
   
   }while (file_exists($tempName));
  
  
  
  if ($numberType == 1)
  $tempName = $tempName.'.jpg';
  
  if ($numberType == 3)
    $tempName = $tempName.'.png';
  
  if ($numberType == 2)
     $tempName = $tempName.'.gif';
  
  $iconeName= $tempName ;
  $tempName = 'images/'.$tempName;
  
  $image->resize(300,300);
 $image->save($tempName);
//$tempName="../".$iconeName;	
	
	
	$id_image = image_exists($id_article);
 	//$typeImage = 
	if ($id_image)
	$req=mysqli_query($link,"UPDATE  `dap2`.`articles_images` 
	SET
	  `image_nom` =  '$iconeName' 
	  WHERE  
	  `articles_images`.`id_image` = $id_image ")or die (mysqli_error($link));
	  
	  else 
	  $req=mysqli_query($link," 
	  
	  INSERT INTO  `dap2`.`articles_images` (
 
`image_nom` ,
`id_article`
)
VALUES (
   '$iconeName',  '$id_article'
);

 ")or die (mysqli_error($link));
	  
	  
	  
	  
	
	 echo("<center>Image ajouté avec succés!!</center>");
header("Location:update-designation.php?search=".$search);
   } 
   else 
   echo("<center>please ,choose a picture to upload first !!</center>");
   
  
   }else {
 
?>
 <center>
 
   <form action="change_logo.php" method="POST" enctype="multipart/form-data">
     <table  align="center" > 


	  <tr><td align="center" valign="middle">
      <input name="uploaded_image" type="file" dir="ltr" lang="fr" value = "Parcourir l'image "   />
      <input type="hidden" name ="id_article" value="<?php
	  $id_article="";
	   if (isset (  $_GET["id_article"]))
 $id_article = $_GET["id_article"];
	  else  if (isset (  $_POST["id_article"]))
 $id_article = $_POST["id_article"];
	  
	   echo $id_article;?>"  />
       
        <input type="hidden" name ="search" value="<?php

	  
	   echo $search;?>"  />
       
       
       
       
      </td></tr>

	
	  <tr><td align="center"><input type="submit" name = "submit" value="telecharger" /></td></tr>

		

 
 </table>
 </form>
 
 </center>
<?php
   }
?>
   
   


<?php	
	
	}
else

	header("Location:../login.php");

?>

 
    <!-- end .container -->
 <?php 
include("modele/footer.php");
?>
    
    </div>
   	  <script type = "text/javascript" src = "design/jquery.js"> </script> 

  <script type="text/javascript">
//alert($b);


    
//	alert(44);
var a=0;
$("#code").keyup(function(){
//salert($("#code").val());

var stop = 1;
//do{
var $ff = $.trim($("#code").val())
//alert ($ff);
//}while($ff.contains());
 $ff= $ff.replace(/ /g, '%20');
 var $ai=0;
 do {
 $ff= $ff.replace('%20%20', '%20');
 $ai++;
 }while($ai<15);

//alert ($ff);
 $ff=$ff.toUpperCase();

var $b= "fast_info.php?code="+$ff;
	
		
		var len = $("#code").val().length;


if(len>1)
{//	$("#code").val("");

if(a==0)
{
$("#header").hide(1000,function(){
//$("#header").show(1000).html("COPYRIGHT 2012");

	
	
	});
$("#date").hide(1000,function(){
$("#date").show(1000).html(" ");
	
	});
a=1;

}
}
	
	//$("#bar_result").hide(100);
	$("#bar_result").load($b,function(){
		}).show(1000);
	
	//alert($b);
	
	});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>


</body>
</html>
