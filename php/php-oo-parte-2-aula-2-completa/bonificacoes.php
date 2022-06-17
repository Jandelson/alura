<?php

use Alura\Banco\Modelo\Funcionario\Funcionario;
use \Alura\Banco\Modelo\Funcionario\Gerente;
use \Alura\Banco\Modelo\Funcionario\Diretor;
use \Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use \Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\CPF;
use \Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$funcionario1 = new Desenvolvedor(
    'Jandelson',
    new CPF('123.456.789-10'),
    1000
);

$funcionario1->sobeDeNivel();

$funcionario2 = new Gerente(
    'Pamela',
    new CPF('987.654.321-10'),
    3000
);

$funcionario3 = new Diretor(
    'JOAO MI',
    new CPF('987.654.321-11'),
    5000
);

$funcionario4 = new EditorVideo(
    'Paulo',
    new CPF('987.654.321-12'),
    5000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonoficacaoDe($funcionario1);
$controlador->adicionaBonoficacaoDe($funcionario2);
$controlador->adicionaBonoficacaoDe($funcionario3);
$controlador->adicionaBonoficacaoDe($funcionario4);

echo $controlador->recuperaTotal();