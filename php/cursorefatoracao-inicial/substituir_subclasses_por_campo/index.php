<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

require 'Microondas.php';

//utilização do metodo fabrica

$microondas110 = Microondas::criarMicroondas110();
echo "<p>{$microondas110->getVoltagem()}</p>";

$microondas220 = Microondas::criarMicroondas220();
echo "<p>{$microondas220->getVoltagem()}</p>";
