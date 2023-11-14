<?php
$v1=$_POST["v1"];
$x = 0;
$y = 1;

for($i=0;$i<$v1;$i++)
{
     $z = $x+$y;

     if($i%2==0)
     $s = ", ";

     else
         $s = ", ";

     echo $z,$s;

     $x=$y;
     $y = $z;

}
?>