<?php
$v1=$_POST["v1"];
$v2=$_POST["v2"];
$r=0;
for($i=$v1;$i<=$v2;$i++){
    if($i%2==0){
        $r=$r+$i;
    }
}
echo $r;
?>
