<?php

$notas1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Jandelson' => 6,
];

$notas2 = [
    'Ana' => 1,
    'João' => 8,
    'Maria' => 10,
    'Roberto' => 7,
    'Jandelson' => 6,
];

$ss = [
    'A'
];
$ss1 = [
    'B'
];

$a = array_diff_assoc($notas1, $notas2);
$b = [...$ss, 'Júlio César', ...$ss1];

array_push($b, 'Juca');
array_unshift($b, 'Juca');
array_shift($b);
array_pop($b);
var_dump($b);