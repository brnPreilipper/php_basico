<?php
require_once "funcoes.php";
$title = "Meu Primeiro site com PHP";
$mensagem = "Mano que orgulho do meu primeiro site";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $title?></h1>
    <p><?php echo $mensagem?></p>
    <p><?php echo $listaDias?></p>
   
</body>
</html>