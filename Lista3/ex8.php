<?php

$nome = "Nicolas";
$senha = "123456";
$confirmar_senha = "123456";
$data_nascimento = "2005-01-01";

if($senha == $confirmar_senha){
    echo "Senha confirmada!<br>";
}
else{
    echo "Senha não confirmada!<br>";
} 

if($nome != ""){
    echo "nome permitido!<br>";
}
else{
    echo "nome não permitido!<br>";
}