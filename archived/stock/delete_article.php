

<?php
include '../global.php';

if ( isset($_GET["id_article"]))
{ 
 
 
 
 $sql = mysqli_query($link,"DELETE FROM articles WHERE id_article = '".$_GET["id_article"]."'");
 
 

header("Location:stock.php");
die();

}
?>