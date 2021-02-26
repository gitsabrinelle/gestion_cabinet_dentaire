<?php

if( isset($_FILES['ulfile']['name']) ){
	
	echo "Upload file name is : ".$_FILES['ulfile']['name'];
	echo "<br /> Your upload script goes here";
	
}

?>