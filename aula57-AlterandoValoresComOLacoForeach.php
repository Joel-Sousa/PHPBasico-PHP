<?php
echo "<pre>";
$nums = range(0, 10);
print_r($nums);
foreach ($nums as $chave => & $valor){
    $valor *= 10;
    echo $valor;
    echo "<br>";
}
print_r($nums);
echo "</pre>";
?>