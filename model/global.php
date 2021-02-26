<?php
$db = 'stock_23';                             
$link = mysqli_connect('localhost:3306', 'root', '') or header("Location:gestion/installation/index.php");

mysqli_select_db($link ,$db) or header("Location:gestion/installation/index.php");;
?>