<?php
   
   
   $pictureName = 'picture2.jpg';
   if (file_exists($pictureName))
   {
   include('SimpleImage.php');
   include('randWord.php');
   
   do
   {$temp = rand_name(); 
   }while (file_exists($temp));
   
   $image = new SimpleImage();
   
   $image->load($pictureName);
   $image->resize(250,400);
   
   $image->save($temp);
}
   
   ?>
