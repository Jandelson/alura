<?php

enum DiaDaSemana: int
{
    case Domingo = 0;
    case Segunda = 2;
    case Terca = 3;
    case Quarta = 4;
    case Quinta = 5;
    case Sexta = 6;
    case Sabado = 7;

    public function ehFimDeSemana(): bool
    {
        //return $this === DiaDaSemana::Sabado || $this === DiaDaSemana::Domingo;
        return match($this) {
            DiaDaSemana::Sabado, DiaDaSemana::Domingo => true,
            default => false
        };
    }
}

class Funcionario
{
    public function __construct(
        public string $nome,
        public float $salario,
        public DiaDaSemana $diaSemanaPagamento
        //int $diaSemanaPagamento
    ) {
        //$this->defineDiasSemanaPagamento($diaSemanaPagamento);  
    }
    /*
    public function defineDiasSemanaPagamento(int $diaSemanaPagamento): void
    {
        if ($diaSemanaPagamento < 0 || $diaSemanaPagamento > 6) {
            throw new \InvalidArgumentException('Dia da semana invalido . Deve ser entre 0 e 6');
        }

        $this->diaSemanaPagamento = $diaSemanaPagamento;
    }
    */
}

$jandelson = new Funcionario('Jandelson', 1100, DiaDaSemana::Sabado);
var_dump($jandelson->diaSemanaPagamento->name);
var_dump($jandelson->diaSemanaPagamento->ehFimDeSemana());
var_dump(DiaDaSemana::tryfrom(8));