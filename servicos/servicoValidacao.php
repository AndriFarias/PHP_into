<?php

function validaNome(String $nome): bool {
    if(empty($nome)){
        setarMensagemErro('O nome não pode ser vazio, por favor preencha novamente');
         return false;
     }
     
     else if(strlen($nome) < 3){
         setarMensagemErro('O nome não pode ser menor que 3 caracteres');
         return false;
     }
     
     else if (strlen($nome) > 40){
         setarMensagemErro('O nome não pode ser maior que 40 caracteres');
         return false;
     }
     return true;
}

function validaIdade(string $idade): bool{
    if(!is_numeric($idade)){
        setarMensagemErro('Digite um numero para idade');
        return false;
    }
    return true;
}




 
 