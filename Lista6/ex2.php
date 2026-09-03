<?php
$opcao = 2;
$saldo = 500;
switch ($opcao) {
    case 1:
        echo "Seu saldo atual é: R$ $saldo";
        break;
    case 2:
        echo "Voce escolheu: Sacar dinheiro";
        break;
    case 3:
        echo "Voce escolheu: Depositar dinheiro";
        break;
    case 4:
        echo "Voce escolheu: Consultar extrato";
        break;
    default:
        echo "Opção inválida.";
}