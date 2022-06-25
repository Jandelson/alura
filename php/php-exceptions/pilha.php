<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    }  catch (RuntimeException | DivisionByZeroError $error) {
        echo $error->getMessage() . PHP_EOL;
        echo $error->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';
    /*
    try {
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor';
    } catch (RuntimeException $error) {
        echo 'erro';
    }*/

    for ($i = 1; $i <= 5; $i++ ) {
        echo $i . PHP_EOL;
    }
    //var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Inicio' . PHP_EOL;
funcao1();
echo 'Fim' . PHP_EOL;