<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

require 'Empresa.php';
require 'Funcionario.php';

$alura = new Empresa();
$funcionario = new Funcionario('Giovanni', 1000);

$alura->adicionarFuncionario($funcionario);
echo $funcionario->getSalario();

$alura->promoveFuncionario($funcionario, 50);
echo $funcionario->getSalario();
