<?php
$vlr=$_POST["valor"];
 echo $vlr,"=",$rsp=strlen($vlr);
 echo "<br>";

for($x=1;$x<=$rsp;$x++){
    echo $x," ";
}
?>