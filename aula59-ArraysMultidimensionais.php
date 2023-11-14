<?php
echo "<pre>";
$jogo = array(
    array("ID"=>1, "Nome"=>"joao", "Pontos"=>10),
    array("ID"=>2,"Nome"=>"maria","Pontos"=>20),
    array("ID"=>3,"Nome"=>"jose","Pontos"=>30),
);
print_r($jogo);
echo $jogo[2]["Nome"];
echo "<br>--------------------------------------<br>";
//com colchetes

$jogos = [
    ["ID"=>1,"Nome"=>"joao","Pontos"=>10],
    ["ID"=>2,"Nome"=>"maria","Pontos"=>20],
    ["ID"=>3,"Nome"=>"jose","Pontos"=>30],
];
print_r($jogos);
echo $jogos[1]["Nome"];
echo "</pre>";
?>