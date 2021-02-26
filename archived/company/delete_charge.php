

<?php
include '../global.php';
$id;
if (isset($_GET["id"]))
{ 
$id=$_GET['id'];




 $sql = mysqli_query($link,"DELETE FROM charges WHERE id = '".$_GET["id"]."'");






}
header("Location: charges.php");
?>