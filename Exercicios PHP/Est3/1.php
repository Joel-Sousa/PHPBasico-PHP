<?php
class Produto{
public $Id;
public $Nome;
public $Valor;
public function __construct($Id, $Nome, $Valor){
$this->Id = $Id;
$this->Nome = $Nome;
$this->Valor = $Valor;
}
}

class Carrinho{
private $itens;
public function InsereProduto(Produto $item){
$this->itens[] = $item;
}
public function ExibeLista(){
foreach( $this->itens as $item ){
return $item->nome."< br />";
}
}
public function CalculaTotal(){
$valor_total = 0;
foreach( $this->itens as $item ){
$valor_total += $item->Valor;
}
echo " R$ " . number_format($valor_total, 2, ',', '.');
}
}

$produto1 = new Produto(1, "Milho verde", 1.75);
$produto2 = new Produto(2, "Ervilha", 1.65);
$produto3 = new Produto(3, "Café 250Gr", 3.45);
$produto4 = new Produto(4, "Refrigerante 2L", 3.69);
$CarrinhoCompra = new Carrinho();
$CarrinhoCompra->InsereProduto($produto1);
$CarrinhoCompra->InsereProduto($produto2);
$CarrinhoCompra->InsereProduto($produto3);
$CarrinhoCompra->InsereProduto($produto4);
$CarrinhoCompra->ExibeLista();
$CarrinhoCompra->CalculaTotal();
?>