

<?php
include '../global.php';

if (isset($_GET["ref"]))
{ $gett=$_GET["ref"]; 
 $sql = mysqli_query($link,"DELETE FROM `dap2`.`clients` WHERE `clients`.`id` = '".$gett."'");
	header("Location: affiche_clients.php");




}
?>