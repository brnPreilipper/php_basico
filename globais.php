<?php

/*Resumindo, GET para obtenção de dados simples, 
POST para envio de dados ou operações mais complexas e sensíveis.
*/


// $_GET pega tudo o que esta sendo passado na url
// $_GET['parametro'] pega o valor do parametro informado
//Começa com ?parametro=valor a partir da segundo parametro uso &

echo "<pre>";
    print_r($_GET);
echo "</pre>";

// $_POST pega todo os parametros em um array
// $_POST['parametro'] traz o valor do parametro informado
echo "<pre>";
    print_r($_POST);
echo "</pre>";

// $_REQUEST
echo "<pre>";
    print_r($_REQUEST);
echo "</pre>";

// $_GLOBALS armazena informações de forma global
$_GLOBALS['token'] = md5(13455);
echo "<pre>";
    print_r($_GLOBALS);
echo "</pre>";

// $_SERVER traz informações do ambinte 
echo "<pre>";
    print_r($_SERVER);
echo "</pre>";

//$_SESSION grava informações no servidor

$_SESSION['cadastro']['nome'] = "Bruno";
$_SESSION['cadastro']['sobrenome'] = "Preilipper";

echo "<pre>";
    print_r($_SESSION);
echo "</pre>";

//$_FILES 

echo "<pre>";
    print_r($_FILES);
echo "</pre>";