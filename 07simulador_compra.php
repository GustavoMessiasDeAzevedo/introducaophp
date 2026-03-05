<?php

$produto = "Teclado";
$valor = 89.90;
$quantidadeComprada = 5;

$valorTotal = $valor * $quantidadeComprada;

if($valorTotal >= 200.00){
    $valorDesconto = $valorTotal * 0.10;
    $valorComDesconto = $valorTotal - $valorDesconto; 
}else if($valorTotal >= 100.00){
    $valorDesconto = $valorTotal * 0.05;
    $valorComDesconto = $valorTotal - $valorDesconto;
}

echo "Resumo da compra <br> Produto: ". $produto .
     "<br>Quantidade: ". $quantidadeComprada . 
     "<br>Total sem desconto: ". $valorTotal . 
     "<br>Valor do desconto: ". $valorDesconto . 
     "<br>Total com desconto: ". $valorComDesconto;


