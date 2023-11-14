<?php
// os valores estao sendo passados atraves da url
//exemplo: http://localhost/eXscript/aula44-OperacaoTernaria2.php?texto1=aaaaaaa&texto2=bbbbbbb
//coloca-se depois da final da url ? mais a chave e o valor da chave caso outra cave adiciona & 
// ?(chave)=(valor)
// ?(chave)=(valor)&(chave2)=(valor)


$txt1 = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave 1 nao existe";
$txt2 = isset($_GET["texto2"]) ? $_GET["texto2"] : "A chave 2 nao existe";

echo $txt1;
echo "<br>";
echo $txt2;
