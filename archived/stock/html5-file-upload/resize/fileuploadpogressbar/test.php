<?php
	$uuid = uniqid();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
var progress_key = '';
 
// this sets up the progress bar
$(document).ready(function() {
	$("#uploadprogressbar").progressBar();
});
 
// fades in the progress bar and starts polling the upload progress after 1.5seconds
function beginUpload() {
	$("#uploadprogressbar").fadeIn();
	setTimeout("showUpload()", 1500);
}
 
// uses ajax to poll the uploadprogress.php page with the id
// deserializes the json string, and computes the percentage (integer)
// update the jQuery progress bar
// sets a timer for the next poll in 750ms
function showUpload() {
	$.get("uploadprogress.php?id=" + progress_key, function(data) {
		if (!data)
			return;
 
		var response;
		eval ("response = " + data);
 
		if (!response)
			return;
 
		var percentage = Math.floor(100 * parseInt(response['bytes_uploaded']) / parseInt(response['bytes_total']));
		$("#uploadprogressbar").progressBar(percentage);
 
	});
	setTimeout("showUpload()", 750);
}

</script>

</head>

<body>



<form id="uploadform" enctype="multipart/form-data" method="post" action="test2.php">
<input id="progress_key" name="UPLOAD_IDENTIFIER" type="hidden" value="<?=$uuid?>" />
<input id="ulfile" name="ulfile" type="file" />
<input type="submit" value="Upload" />
	<span id="uploadprogressbar" class="progressbar">0%</span>
</form>


</body>
</html>