<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    $mail = $_GET['email'];
    $mensagem = '';
    $mensagemErro = '';
    
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return $mensagem;
    } else {
        return $mensagemErro;
    }
}

echo verificaSeEmailEhValido();
