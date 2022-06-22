<?php

class LeitorCsv
{
    private $arquivo;

    public function __construct(string $arquivo)
    {
        $this->arquivo = fopen($arquivo, 'r');
    }

    public function readCsvGenetator()
    {
        while(!feof($this->arquivo)) {
            yield fgetcsv($this->arquivo);
        }
    }

    public function readCsv(): array
    {
        $linhas = [];
        while(!feof($this->arquivo)) {
            $linhas[] = fgetcsv($this->arquivo);
        }

        return $linhas;
    }
}

$csv = new LeitorCsv('linhas.csv');
//$array = $csv->readCsv();
$array = $csv->readCsvGenetator();

foreach ($array as $key => $value) {
    print $value[0] . PHP_EOL;
}

/*
$arquivo  = fopen('linhas.csv', 'w');

for ($i = 1; $i < 10000000000; $i++) { 
    $dados = [
        'nome' => 'Nome ' . $i,
        'idade' => rand(18, 30)
    ];

    fputcsv($arquivo, $dados);
}

fclose($arquivo);
*/