<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];


if ($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}
if ($idade > 12 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}
if ($idade > 18 && $idade < 60){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}else if($idade > 60){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'idoso'){
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}