<?php

$valor = 100;
$valorMinimodaEntrega = 30;
$idadeCliente = 18;
$idadeMinimaBebidaAlcoo = 18;
$estoque=1500;
$quantidadePedida= 5;

if($valor >= $valorMinimodaEntrega){
    
    echo "Liberar entrega gratuíta!<br>";
}
else{
    echo "Pedido recusado! Valor mínimo de entrega não atingido!<br>";
}

if($quantidadePedida <= $estoque){
    echo "Pedido aceito!<br>";
}
else{
    echo "Pedido recusado! Estoque insuficiente!<br>";
}
 if($idadeCliente >= $idadeMinimaBebidaAlcoo){
    echo "Venda de bebida alcoólica permitida!<br>";
}
else{
    echo "Venda de bebida alcoólica não permitida!<br>";
}