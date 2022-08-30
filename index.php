<?php
    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <p>Formulario para inscrição de competidores</p>

    <form action="script.php" method="POST">
        <?php
             $mensagemDeSucesso = obterMensagemSucesso();
             if(!empty($mensagemDeSucesso)){
                 echo $mensagemDeSucesso;
             };
            
            $mensagemDeErro = obterMensagemErro();
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            };
        ?>
        <p>Seu nome: <input type="text" name="nome"/></p>
        <p>Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit"/></p>
    </form>
    
</body>
</html>