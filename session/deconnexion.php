
<?php
if (!isset($_GET["back"]))
header("location:login.php");
else
{
session_start();
session_unset();
session_destroy();


header("location:login.php");
}
?>

