<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
        'aluno' => 'Igor',
        'nota' => 6,
        'aluno' => 'Ana',
        'nota' => 9,
    ],
    10,
    8,
    9,
    7
];
$notasOrdenadas = $notas;
sort($notasOrdenadas); //fun��o que ordena meu array (aten��o ao &, ele significa que vai pegar op array original e orden�-lo), para evitar isso, eu copiei o arrey notas para a variavel $notas ordenadas
//com numeros, o sort ordenada do menor para o maior, com strings, ele ordena em ordem alfab�tica
echo 'Desordenadas: ';
var_dump($notas); //funcao que exibe uma variavel contendo seu tipo, sua estrutura, etc. � algo que utilizamos para visualizar um dadoecho 'Desordenadas: ';

echo 'Ordenadas: ';
var_dump($notasOrdenadas); //funcao que exibe uma variavel contendo seu tipo, sua estrutura, etc. � algo que utilizamos para visualizar um dado


?>