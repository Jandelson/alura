<?php

$dados = [
    'nome' => 'Jandelson', 
    'nota' => 110 ,
    'idade' => 20
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
echo $nome;

//var_dump($nome);

$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}