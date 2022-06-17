<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Jandelson' => 6,
    'Eduardo' => null
];

//manter a chave
//arsort($notas);
//ksort($notas);
krsort($notas);
//rsort($notas);
if (is_array($notas)) {
    var_dump($notas);
}

//var_dump(array_is_list($notas));
var_dump(array_key_last($notas));
var_dump(array_key_exists('Eduardo', $notas));
var_dump(isset($notas['Jandelson']));

echo 'alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo array_search(88, $notas) . PHP_EOL;



foreach ($notas as $aluno => $nota) {
    if ($aluno === 'Jandelson') {
        return true;
    }
}

function funcao(array $valor) {
    for ($i = 0; $i < count($valor); $i++) { 
        echo $valor[$i];
    }
}

funcao($notas);