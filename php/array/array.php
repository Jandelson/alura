<?php

$notas = [
   [
    'aluno' => 'Maria',
    'nota' => 10
   ],
   [
    'aluno' => 'Jandelson',
    'nota' => 6
   ],
   [
    'aluno' => 'Ana',
    'nota' => 9
   ]
];

function ordena(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    return 1;
}
usort($notas, 'ordena');

var_dump($notas);

/*
foreach ($array as $v) {
    echo $v . PHP_EOL;
}
*/