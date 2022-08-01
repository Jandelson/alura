<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Telefone.php';
require 'Endereco.php';
require 'Usuario.php';

$endereco = new Endereco(
    'Rua Vergueiro 3185',
    '04101-300'
);

$telefone = new Telefone(
    '11',
    '5571-2751',
    'comercial'
);

$usuario = new Usuario('Giovanni', 'Tempobono', $endereco, $telefone);

echo $usuario->getNome() . PHP_EOL;
echo $usuario->getEnderecoECep() . PHP_EOL;
echo $usuario->getTelefoneDdd() . PHP_EOL;
