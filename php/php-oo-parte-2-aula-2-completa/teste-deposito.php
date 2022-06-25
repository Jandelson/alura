<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 
        'jan123', 
        new Endereco('A', 'B', 'C', 'F')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $error) {
    echo "Valor precisa ser positivo";
    return;
}