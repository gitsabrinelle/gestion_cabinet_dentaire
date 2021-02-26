<?php 



?>
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
    <br />  </div>

 


<div class="content">
  <div id = "date">


  </div>
  
 <p style = "text-align:Center ; font-size : 28px;"> 
Gestion du Coffre :
  </p>
 
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
 if(isset($_SESSION['username']))  
{
	
function get_capitale_initial()	
{
	$result = 0;
	
	
$req_capital_initiale = mysqli_query($link,"SELECT capital_initiale
FROM  `etablissement` 
WHERE id ='0'
") or die (mysqli_error($link));

if( mysqli_num_rows($req_capital_initiale))
{
while($row_req =mysqli_fetch_array($req_capital_initiale)) 	
	{

{
	

	$result = $row_req["capital_initiale"];
	}
	
 	}
}
	
	
	return $result ;
}




   if( isset($_GET['capital_initiale']) ) 
   {

$capital_initiale = $_GET['capital_initiale'];
$req=mysqli_query($link,"UPDATE  `dap2`.`etablissement` SET  `capital_initiale` =  '$capital_initiale' WHERE  `etablissement`.`id` =0 ")or die (mysqli_error($link));
	

header("Location:coffre.php?msg=1");


















   }







	
?>	




















	
<?php	}
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
