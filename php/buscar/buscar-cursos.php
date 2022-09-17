<?php

use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $resposta->getBody();
echo $html;