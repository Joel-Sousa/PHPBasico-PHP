<?php
echo "<pre>";
#defindo array
$arr = ["zero", "um", "dois", "tres"];

#adcionando elementos
$arr[] = "quatro";

#alterando elementos
$arr[1] = "umm";
$arr[2] = "doiss";

#excluindo elementos
unset($arr[3]);

print_r($arr);
echo "</pre>";
?>
