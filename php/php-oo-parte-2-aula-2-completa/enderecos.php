<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$enderecco1 = new Endereco('Sertãozinho', 'BNairr','Rua','122');
$enderecco2 = new Endereco('Ribeirão', 'Preto','Rua10','85');
$enderecco3 = new Endereco('Barrinha', 'Rural','Mato','S/N');

$enderecco1->rua = "TESTE";

echo $enderecco1->rua . PHP_EOL;
echo $enderecco2->bairro . PHP_EOL;
echo $enderecco3 . PHP_EOL;