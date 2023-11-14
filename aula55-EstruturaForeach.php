<?php
//laco for
$lista = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];

for($x=0;$x<count($lista);$x++){
    echo $x , " : ", $lista[$x];
    echo "<br>";
}
echo "<br>";

//laco foreach

foreach ($lista as $item){
    
    echo $item."<br>";
}
