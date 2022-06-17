<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use \Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$autenticador =  new Autenticador();
$diretor = new Diretor('João da Siulva', new CPF('123.456.789-10'), 15000);

$autenticador->tentaLogin($diretor, '1234');