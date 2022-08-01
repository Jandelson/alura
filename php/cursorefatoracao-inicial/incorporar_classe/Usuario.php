<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $endereco;
    private $telefone;

    public function __construct(
        string $nome,
        string $sobrenome,
        Endereco $endereco,
        Telefone $telefone
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getEnderecoECep(): string
    {
        return $this->endereco->getEnderecoECep();
    }

    public function getTelefoneDdd(): string
    {
        return $this->telefone->getTelefoneDdd();
    }
}
