<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha novamente';
    header('location : index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser menor que 3 caracteres';
    header('location : index.php');
    return;
}

else if (strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser maior que 40 caracteres';
    header('location : index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Digite um numero para idade';
    header('location : index.php');
    return;
}


if ($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location : index.php');
            return;
        }
    }
}
if ($idade > 12 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location : index.php');
            return;
        }
    }
}
if ($idade > 18 && $idade < 60){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location : index.php');
            return;
        }
    }
}else if($idade > 60){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'idoso'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location : index.php');
            return;
        }
    }
}