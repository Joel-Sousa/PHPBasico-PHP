
<?php
$v1=$_POST["v1"];
$v2=$_POST["v2"];
$con=$_POST["con"];

if ($con=="+"){
    $r=$v1+$v2;
    echo $r;
}else if($con=="-"){
    $r=$v1-$v2;
    echo $r;
}else if($con=="*"){
    $r=$v1*$v2;
    echo $r;
}else if($con=="/"){
    $r=$v1/$v2;
    echo $r;
}else{
    $r=0;
}
?>

