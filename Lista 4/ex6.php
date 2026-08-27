<?php

$idade = 65;
$deficiencia = "nao";
$gestante = "nao";

echo "Bem vindo ao Sistema de Classificacao de Atendimento <br>";

if ($idade >= 60 || $deficiencia == "sim" || $gestante == "sim") {
    echo "Atendimento prioritario";
} else {
    echo "Atendimento normal";
}

?>