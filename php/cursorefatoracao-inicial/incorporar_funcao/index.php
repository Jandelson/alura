<?php 

declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => -1000,
    'Jandelson' => 0
];

verificaSeSaldoEstaPositivo('Giovanni', $saldos);
verificaSeSaldoEstaPositivo('Erika', $saldos);
verificaSeSaldoEstaPositivo('Jandelson', $saldos);

function verificaSeSaldoEstaPositivo(string $nome, array $saldos): void
{
    echo imprimeMensagem($saldos[$nome], $nome);
}

function imprimeMensagem(float $saldo, string $nome): string
{
    if ($saldo <= 0) {
        return "<p>A conta de $nome não possui um saldo positivo</p>"; 
    }
    return "<p>A conta de $nome possui um saldo positivo.</p>";
}