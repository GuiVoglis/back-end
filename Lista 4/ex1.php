<?php

$idade = 16; 
$ingresso = "sim";

echo "bem vindo ao CineAmor <br>";

if($idade >=  18 && $ingresso == "sim"){
    echo "pode entrar e assistir o filme";

}
else{
    echo "idade nao permitida ou sem ingresso!";
}