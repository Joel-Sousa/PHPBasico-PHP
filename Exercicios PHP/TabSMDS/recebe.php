
<?php
$cal=$_POST["calculo"];

if($cal=="+"){
    for($x=1;$x<=10;$x++){
        for($y=1;$y<=10;$y++){
            $res=$x+$y;
           echo $x,"+",$y,"=",$res,"<br>";
        }
        echo "<br>";
    }
    
}elseif($cal=="-"){
    for($x=1;$x<=10;$x++){
        for($y=1;$y<=10;$y++){
            $res=$x-$y;
           echo $x,"-",$y,"=",$res,"<br>";
        }
        echo "<br>";
    }
}elseif($cal=="*"){
    for($x=1;$x<=10;$x++){
        for($y=1;$y<=10;$y++){
            $res=$x*$y;
           echo $x,"*",$y,"=",$res,"<br>";
        }
        echo "<br>";
    }
}else{
    for($x=1;$x<=10;$x++){
        for($y=1;$y<=10;$y++){
            $res=$x/$y;
           echo $x,"/",$y,"=",$res,"<br>";
        }
        echo "<br>";
    }
}
?>
