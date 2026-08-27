<?php
// Cadastro de um funcionario novo no sistema
$nome = "Bernardes";
$acesso = 3;

if($acesso == 1){
    echo "Bem vindo $nome. Voce tem Acesso basico ao sistema";
}
elseif($acesso == 1){
    echo "Bem vindo $nome. Voce tem acesso intermedario ao sistema";
}
elseif($acesso == 2){
    echo "Bem vindo $nome. Voce tem acesso de administrador ao sistema";
}
else{
    echo "Erro. Numero de acesso invalido";
}