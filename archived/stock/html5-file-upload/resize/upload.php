<?php
   if( isset($_POST['submit']) ) {
 
      include('SimpleImage.php');
	
   include('randWord.php');
   
   do
   {$temp = rand_name().'.jpg'; 
   }while (file_exists($temp));
   
   $image = new SimpleImage();
   $name = $_FILES['uploaded_image']['tmp_name'];
   
      $image->load($name);
 //$image->resize(300,300);
   
   $image->save($temp);
   echo("<img src=\"".$temp."\">");
 //  echo("</br>originale image : </br>");
 //  echo("<img src=\"".$name."\">");
  //  echo($name);
   
   
   
   } else {
 
?>
 <center>
 <table>
   <form action="upload.php" method="post" enctype="multipart/form-data">
      
	  <p> ya nounou ya fahma click ic sur le bouttom choisir</p>
	  <input type="file" name="uploaded_image" />


	  <p> apres ki kheyri l'image li haba tebe3tihali</p>
 
      <input type="submit" name="submit" value="telecharger" />
 	  <p>et a la fin tu click sur telecharger </p>
<p>brahim !!
   </form>
 </table>
 <center>
<?php
   }
?>