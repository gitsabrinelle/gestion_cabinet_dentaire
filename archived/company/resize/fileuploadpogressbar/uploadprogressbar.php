<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 
if (@$_GET['id']) {
	echo json_encode(uploadprogress_GET_info($_GET['id']));
	exit();
}

?>