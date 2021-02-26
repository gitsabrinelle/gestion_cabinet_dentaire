<?php

   
$dirname = "images/icones";
$images = scandir($dirname);
$ignore = Array(".", "..");
echo "<center><table  bordercolor=\"#00FFCC\" border=\"2\"  align=\"center\"><tr>"; 

$i = -1;
$j = 3;
$f= 3;
foreach($images as $curimg){

if(!in_array($curimg, $ignore)) {
//if(is_file($curimg))

if(strpos($curimg,'.'))
{

if ($j - $i==1)
{
//$i = $i+1;
$j = $j +$f;
echo("</tr><tr>");
}
echo "<td width=\"250\" height=\"250\" align=\"center\" valign=\"middle\"><center><a href='images/$curimg'><img src='images/icones/$curimg' /></a></td>";


//if ($i % 5==)echo("");
$i = $i+1;

}
};

}

echo "</tr></table></center>";
 
?>