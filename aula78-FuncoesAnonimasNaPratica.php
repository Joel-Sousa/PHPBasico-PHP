
<?php
#PRÁTICA - FUNÇÕES ANÔNIMAS

$quadrado = function($item){
    return $item * $item;
};
$cubo = function($item)use($quadrado){
    return $quadrado($item) * $item;
};
$soma = function($item){
    return $item + $item;
};

function processa_lista($lista, $func){
    foreach($lista as &$item){
        $item = $func($item);
    }
    return $lista;
}
echo "<pre>";
echo "QUADRADO\n";
print_r(processa_lista(range(1,10), $quadrado));

echo "\nCUBO\n";
print_r(processa_lista(range(1,10), $cubo));

echo "\nSOMA\n";
print_r(processa_lista(range(1,10), $soma));
echo "</pre>";

//print_r(processa_lista(
//    range(1,10),
//    function($item){
//        return $item - 10;
//    }
//));
?>



<?php
/*
$quadrado = function ($item){
    return $item * $item;
};
$cubo = function ($item) use($quadrado){
    return $quadrado($item) * $item;
};
$soma = function ($item){
return $item + $item;
};

function processa_lista($lista, $func){
    foreach ($lista as $item){
        $item = $func ($item);
    }
    return $lista;
}
echo "<pre>";
echo "quadrado";
print_r(processa_lista(range(1,10), $quadrado));
echo "<br>";
echo "cubo";
print_r(processa_lista(range(1,10), $cubo));
echo "<br>";
echo "soma";
print_r(processa_lista(range(1,10), $soma));
echo "<br>";
echo "</pre>";
echo $quadrado;
//print_r(processa_lista(range(1,10), function ($item){
//            return $item -10;
//}
//));
 */
?>
 
