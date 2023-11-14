<?php
$rst=0;
for($x=0;$x<=500;$x++){
 if($x%2!=0){
     if($x%3==0){
        $rst=$rst+$x;
        echo $x," ";   
     }
}
}
echo "<br>";
echo "A Soma e: ",$rst;
?>
