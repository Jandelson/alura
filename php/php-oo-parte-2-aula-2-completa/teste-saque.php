<?php

use \Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use \Alura\Banco\Modelo\Conta\Titular;
use \Alura\Banco\Modelo\CPF;
use \Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;

require_once 'autoload.php';

$conta =  new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'), 
        'Jandelson', 
        new Endereco('Sertãozinho', 'Jardim', 'Rua', '10b')
    )
);

$conta->deposita(500);
try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $error) {
    echo $error->getMessage();
}

echo $conta->recuperaSaldo();