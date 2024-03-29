<?php declare(strict_types=1);

namespace Alura\SubstituirArrayPorObjeto;

require 'Usuario.php';

use PDO;

$dadosUsuario = ['TESTE', 'Tempobono', 'Alura', 'Instrutor'];

$usuario = new Usuario($dadosUsuario[0], $dadosUsuario[1], $dadosUsuario[2], $dadosUsuario[3]);

$pdo = new PDO('sqlite:bancodedados.db');

$inserir_usuario = $pdo->prepare(
    'INSERT INTO usuarios (nome, sobrenome, empresa, cargo) VALUES (:nome,:sobrenome,:empresa,:cargo)'
);

$inserir_usuario->bindValue(':nome', $usuario->nome);
$inserir_usuario->bindValue(':sobrenome', $usuario->sobrenome);
$inserir_usuario->bindValue(':empresa', $usuario->empresa);
$inserir_usuario->bindValue(':cargo', $usuario->cargo);

$inserir_usuario->execute();

$buscar_usuarios = $pdo->prepare('SELECT * FROM usuarios');

if ($buscar_usuarios->execute()) {
    $usuarios = $buscar_usuarios->fetchAll();
    foreach ($usuarios as $usuario) {
        echo '<br>';
        echo "<p>Nome: {$usuario['nome']}</p>";
        echo "<p>Sobrenome: {$usuario['sobrenome']}</p>";
        echo "<p>Empresa: {$usuario['empresa']}</p>";
        echo "<p>Cargo: {$usuario['cargo']}</p>";
        echo '<br>';
    }
}
