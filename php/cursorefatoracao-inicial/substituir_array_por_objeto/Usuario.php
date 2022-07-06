<?php

namespace Alura\SubstituirArrayPorObjeto;

class Usuario 
{
    private $nome;
    private $sobrenome;
    private $empresa;
    private $cargo;

    public function __construct(
        string $nome,
        string $sobrenome,
        string $empresa,
        string $cargo,
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->empresa = $empresa;
        $this->cargo = $cargo;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    } 
}