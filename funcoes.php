<?php

//funções nativa do php

$dias = [
    "domingo ",
    "segunda ",
    "terça ",
    "quarta ",
    "quinta ",
    "sexta ",
    "sábado "
];

//implode junta itens de um array com um separador
$listaDias = implode("|", $dias);

$dadosCsv = "Bruno Prelipper;27;brnpreilipper0@gmail.com";

$csvArray = explode(";", $dadosCsv); //explode transforma uma string em array baseado em um caractere separador

echo '<pre>';
print_r($csvArray);
echo '</pre>';

//Cria hash md5
$senha = 123;
$senhaHas = md5($senha);
echo $senhaHas;

//TROCA PEDAÇO DE STRING
$texto = "O Flamengo é o melhor time do mundo, fluminense tem inveja.";

//troca uma string por outra
//$novoTexto = str_replace("é o melhor time", "é a melhor seleção", $texto);
$novoTexto = str_replace(["o melhor", "time"], ["a melhor"],
$texto);
echo $novoTexto;

//cortar um pedaço de string
$usuario = "brn.preilipper";
$userBlock = substr($usuario, 6, 6);

echo $userBlock."*****";

//formatar numeros
$numero = 155.5998;

$formata = number_format($numero, 2, ',');
echo $formata;



?>

