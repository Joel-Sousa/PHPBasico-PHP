<?php
$vlr=$_POST["valor"];
$rst=0;
for($x=$vlr;$x<=100;$x++){
   if($x%2==0){
       $rst=$rst+$x;
    echo $x,"+";
}
}
echo "<br>";
echo "Soma=",$rst;
?>