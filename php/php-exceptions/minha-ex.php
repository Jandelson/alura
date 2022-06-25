<?php

class minhaEx extends DomainException
{
    public function exibir()
    {
        echo 'EX';
    }
}

try {
    throw new minhaEx();
} catch (minhaEx $error) {
    $error->exibir();
}