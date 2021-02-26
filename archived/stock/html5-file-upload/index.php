
<center><li><a href="showAll.php">voir toutes les photos</a></li>
</center>

<?php

//phpinfo();
   
   if( isset($_POST['submit']) ) 
   {
 
      include('SimpleImage.php');
	
   include('resize/randWord.php');
   
   
   
   $image = new SimpleImage();
   $name = $_FILES['uploaded_image']['tmp_name'];
//echo($name);
   if (!$name=="")
   {
   $numberType = $image->load($name);
	
	//$image->resize(300,300);
   do
   {
   $tempName = rand_name(); 
   
   }while (file_exists($tempName));
  
  
  
  if ($numberType == 1)
  $tempName = $tempName.'.jpg';
  
  if ($numberType == 3)
    $tempName = $tempName.'.png';
  
  if ($numberType == 2)
     $tempName = $tempName.'.gif';
  
  $iconeName= $tempName ;
  $tempName = 'images/'.$tempName;
  
  
  $image->save($tempName);
	
	
	
	$image->resize(200,200);
  $iconeName = 'images/icones/'.$iconeName;
	$image->save($iconeName);
	//$typeImage = 
	
	
	
	
echo "<center>";
echo("<p><u>l'image originale :<p><img src=\"".$tempName."\"></a></p>");

echo("<p><u>The image after it has been resized :<p><img src=\"".$iconeName."\"></p>");
echo "</center>";
?>
<?php
   } 
   else 
   echo("<center>please ,choose a picture to upload first !!</center>");
   
  
   }
   else {
 
?>
 <center>
 
   <form action="index.php" method="post" enctype="multipart/form-data">
     <table width="70%" bordercolor="#00FFCC" border="2" bgcolor="#FFCCFF" align="center" height="300"> 

 <tr><td align="center"><div><li>click sur Parcourir pour selectionner une image</li> </div></td>  </tr>
	  <tr><td align="center" valign="middle"><div><input name="uploaded_image" type="file" dir="ltr" lang="fr"  /></div></td></tr>

	  <tr><td align="center" valign="middle"><div size = "30%"><li>click sur telecharger </li></div></td></tr>
	  <tr><td align="center"><div><input type="submit" name="submit" value="telecharger" /></div></td></tr>
 	  <tr><td align="center"><div><li>crée par Meskouna Ibrahim !!</li></div></td></tr>
		<tr><td align="center"><div><li><a href="showAll.php">voir toutes les photos</a></li></div></td></tr>

 
 </table>
 </form>
 
 </center>
<?php
   }
?>