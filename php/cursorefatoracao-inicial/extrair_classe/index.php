<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato("Rua Vergueiro 3185", "04101-300", "5571-2751", "celular", "11");
$usuario = new Usuario("Giovanni", "Tempobono", $contato);

echo $usuario->getNome();
echo $usuario->getTelefoneDdd();
