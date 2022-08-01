<?php 

declare(strict_types=1);

$saldos = [
    'Giovanni' => 15000,
    'Erika' => 5000,
];

//Verifica se o usuário existe
/*
if (array_key_exists("Giovanni", $saldos)) {
    //Se existir, exibe o saldo na tela
    echo "<p>O saldo do Giovanni é: ${saldos['Giovanni']}</p>";
} else {
    //Se não, exibe erro
    echo "<p>Correntista não existente.</p>";
}
*/
function exibeSaldos(string $nome, array $saldos)
{
    if (!array_key_exists($nome, $saldos)) {
        exibeErro($nome);
    }

    print "O saldo de $nome é de {$saldos[$nome]}" . PHP_EOL;
}

function exibeErro(string $nome)
{
    print "Corretista: $nome não encontrado" . PHP_EOL;
    exit;
}

exibeSaldos('Giovanni', $saldos);