<?php

$x = 50;
$heredoc = <<<TESTE 
        
        <div>Valor da variavel x e: $x</div>
        TESTE;

echo $heredoc;
$nowdoc = <<<'nd' 
        
        class NowDoc{
            function __construct() {
                ;
            }
        }
        nd;

echo $nowdoc;