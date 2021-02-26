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
session_start();
 
 


	
	?>  
 </div>


<div class="content">

 </div>



  <div class="content"><br  />
  


<?php
$ref;
$errors =  array(
/* "no_user" */ 		  		0=>0,
/* "no_pass" */ 		  		1=>0,
/* "no_matching_pass" */  		2=>0,
/* "no_date" */           		3=>0,
/* "no_id_user_type" */   		4=>0,
/* "admin" */             		5=>0,
/* "registred" */        		6=>0,
/* "cant_update" */   		    7=>0,
/* "no_same_passwords " */      8=>0,
/* "no_web_acces      " */      9=>0,
/* "no_ancien_pass    " */     10=>0,
/* "no_id_user    " */ 		   11=>0,
);

//ancien_pass
$error = 0;//no error

$ancien_pass;
if(isset($_GET['ancien_pass']))
$ancien_pass = $_GET['ancien_pass'];
else
$errors[10] = 1;

$id_user;
if(isset($_GET['id_user']))
$id_user = $_GET['id_user'];
else
$errors[11] = 1;//manque coordonnées

$user;
if(isset($_GET['user']))
$user = $_GET['user'];
else
$errors[0] = 1;//manque coordonnées


$web="off";
if(isset($_GET['web']))
$web = $_GET['web'];
else
$errors[9] = 1;//manque coordonnées

$pass;
if(isset($_GET['pass']))
$pass = $_GET['pass'];
else
$errors[1] = 1;//manque coordonnées

$confirm_pass;
if(isset($_GET['confirm_pass']))
$confirm_pass = $_GET['confirm_pass'];
else
$errors[2] = 1;//manque coordonnées


$date;
if(isset($_GET['date']))
$date = $_GET['date'];
else
$errors[3] = 1;//manque coordonnées

$id_user_type;

if(isset($_GET['id_user_type']))
$id_user_type = $_GET['id_user_type'];
else
$errors[4] = 1;//manque coordonnées

if (!$errors[1]&&!$errors[2])
if ( strcmp ($pass,$confirm_pass))
$errors[8] = 1;  // no matching passwords



if(isset($_SESSION['username']))
{	


$req_utilisateur = mysqli_query($link,"select * from users where user  =  '".$user."'  ")or die(mysqli_error($link));
if(!$errors[11])
{
	$req_pass = '';
	if (!$errors[10])
	$req_pass = " and pass = '".MD5($ancien_pass)."' ";
$req_pass = mysqli_query($link,"select * from users where id_user  =  '".$id_user."' ".$req_pass)or die(mysqli_error($link));
if (!mysqli_num_rows($req_pass))
$errors[10]=0;
else if (!$errors[5] &&  strcmp ($user,$_SESSION['username']))
$errors[10]=2;
else 
$errors[10]=3;
//die("".mysqli_num_rows($req_pass));
}

$req_admin=mysqli_query($link,"select * from users where user  =  '".$_SESSION['username']."' ")or die(mysqli_error($link));

if(mysqli_num_rows($req_utilisateur))
{
	
	// echo ("user already exists,update mode<br>");
$errors[6] = 1;	 //user already exists,update mode

    }

if(mysqli_num_rows($req_admin))//req_admin
{
	
	$type = mysqli_fetch_array($req_admin);
	$type = $type["id_user_type"];
	if ($type=="2")
	{
	//echo ("No permissions");
	$errors[5] = 1;

	}
	//admin section
	
//	echo ("Admin");
	if ($errors[6]==1)
{
		// echo "update";
if ( strcmp ($user,$_SESSION['username']))
{
	$errors[7] = 1;  // no matching update

}
}

	else 
{
	// echo "new user";
}
	
	
	
	}
var_dump($errors);
if(!$errors[0]&&!$errors[1]&&!$errors[2]&&!$errors[3]&&!$errors[4]&&!$errors[8])
{
	//echo("pas de manques ");
if($errors[5] && !$errors[6] )
{
echo("new user ");
if ($web=="off")
$web=0;
else
$web=1;
if (!$errors[7] ) // no matching update


$req_inser = mysqli_query($link,"
INSERT INTO  `dap2`.`users` (
`user` ,
`pass` ,
`id_user_type` ,
`date` ,
`etat` ,
`bar_code` ,
`web`
)
VALUES (
 '$user', '".MD5($pass)."' ,  $id_user_type,  '$date',  1,  '',  $web )")
  or die (mysqli_error($link));

if (isset($_GET["account"]))
{
	
 $_SESSION['username'] = $user; 


$req = mysqli_query($link,"DELETE FROM `dap2`.`users` WHERE `users`.`user` = 'admin';")
  or die (mysqli_error($link));	
	}
if($req_inser)
//echo("done ");
  header("Location:affiche_utilisateurs.php");

//cas d un nouvel utilisateur
}
// le cas d une modif administrateur 



}

	if (($errors[1]&&$errors[2]&&$errors[3]&&$errors[4]&&!$errors[11]&&$errors[10]==2 )|| ($errors[5] && $errors[6])|| ($errors[4] && $errors[6] &&!$errors[5] && $errors[10]==3))
{
		//echo("update with admin");
		if ($web=="off")
$web=0;
else
$web=1;
if ($errors[10]!=3 )
{

	$req_update_user = mysqli_query($link,"UPDATE  `dap2`.`users` SET 
`id_user_type` =  '$id_user_type',
`web` =  '$web',
user = '$user'
 WHERE  `users`.`id_user` = $id_user") ;//or die (mysqli_error($link));
 $_SESSION['username'] = $user; 
if($req_update_user)

	header("Location:affiche_utilisateurs.php");
}
// if($req_update_user)
//echo("done ");
 // header("Location:affiche_utilisateurs.php");
else
{
if (!$errors[8] && $errors[5])	
{$req_update_user = mysqli_query($link,"UPDATE  `dap2`.`users` SET 
`id_user_type` =  '$id_user_type',
`web` =  '$web',
pass = '".MD5($pass)."',
user = '$user'
 WHERE  `users`.`id_user` = $id_user") ;//or die (mysqli_error($link));
 $_SESSION['username'] = $user; 
 }
if($req_update_user)

	header("Location:affiche_utilisateurs.php");

	}
}
if ( ($errors[4] && $errors[6] &&!$errors[5] && $errors[10]==3))
{	$req_update_user = mysqli_query($link,"UPDATE  `dap2`.`users` SET 
pass = '".MD5($pass)."',
user = '$user'
 WHERE  `users`.`id_user` = $id_user") or die (mysqli_error($link));
if($req_update_user)

	header("Location:affiche_utilisateurs.php");

}

echo ("mise a jour impossible <br> Verifiez vos données avant d\'enregistrer SVP ")	;






}
else
	header("Location:../login.php");



?>
</div>  

    <!-- end .container -->
 
 
    </div>
   	    <script type = "text/javascript" src = "design/jquery.js"> </script> 
	
   <script type="text/javascript" > 
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"design/SpryAssets/SpryMenuBarDownHover.gif", 
imgRight:"design/SpryAssets/SpryMenuBarRightHover.gif"});
  </script>


</body>
</html>