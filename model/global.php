<?php
$db = 'gestion_cabinet';
$link = mysqli_connect('localhost:3306', 'root', '') or header("Location:gestion/installation/index.php");

mysqli_select_db($link ,$db) or header("Location:gestion/installation/index.php");;
?>