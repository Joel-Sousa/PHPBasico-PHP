<?php
$slr1=$_POST["valor1"];
$slr2=$_POST["valor2"];
$slr3=$_POST["valor3"];
$slr4=$_POST["valor4"];
$slr5=$_POST["valor5"];
$inss=8.0/100;
$ir=10.0/100;
$cs=0.05/100;
$ary=array(1=>$slr1,$slr2,$slr3,$slr4,$slr5);
for($x=1;$x<=5;$x++){
    $ars=$ary[$x];
    $r1=$ars-($inss*$ars);
    $r2=$r1-($ir*$r1);
    $r3=$r2-($cs*$r2);
    echo $x,"º","Salario: ",$ars,
            " - INSS: ",$r1,
            " - IR: ",$r2,
            " - Contribiçao Sindical: ",$r3,
            " Total: ",number_format($r3, 2, '.', ',')."<br><br>";
    
}
?>