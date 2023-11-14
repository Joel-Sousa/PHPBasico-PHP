<?php

$str = "abc";

echo $str,123,"<br>";
echo $str[2];
echo $str{1},"<br>";

$v = strlen($str);
for($i=0;$i<$v;$i++){
    
   echo "Posicao ",$i," ",$str[$i]."<br>";
}
