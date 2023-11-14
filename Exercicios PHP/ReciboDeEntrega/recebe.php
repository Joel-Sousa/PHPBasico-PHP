
<?php
$prof=$_POST["tipo"];
$nom=$_POST["nome"];
$liv=$_POST["livro"];

if($prof=="p"){
    echo "O professor(a):",ucfirst("$nom");
    echo " devera entregar o livro:",ucfirst("$liv");
    echo " no dia: ";
    echo date("d/m/Y.", strtotime("+10 days")),"<br>";
    echo date("d/m/Y.");   
}else{
    echo "O aluno(a):",ucfirst("$nom");
    echo " devera entregar o livro:",ucfirst("$liv");
    echo " no dia: ";
    echo date("d/m/Y.", strtotime("+3 days")),"<br>";
    echo date("d/m/Y.");
}


?>
