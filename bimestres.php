<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Igor' => 6
];
$notasBimestre2 = [
    'Ana' => 9,
    'João' => 8,
    'Roberto' => 7,
];

var_dump(array_diff($notasBimestre1, $notasBimestre2)); //traz a diferença entre os 2 arrays em um novo array (traz os elementos do primeiro parametro que não estão nos demais parametros (podem ser mais de 2)). Obs.: ele só leva em consideração o valor e não a chave (nome)

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //faz o mesmo que o de cima, porém lava em consideração a chave e não o valor

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));//traz tudo que tem no primeiro array e não tem no segundo, mas levando em consideração a chave e o valor

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump(array_keys($alunosFaltantes)); //recebe um array e devolve suas chaves

var_dump(array_values($alunosFaltantes)); //recebe um array e devolve só os valores faltantes (dos alunos que "faltaram")

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos)); //eu passo um array contendo as chaves que serão as notas e outro array contendo os valores, que serão os nomes. OBS.: os arrays precisam ser do mesmo tamanho

var_dump(array_flip($alunosFaltantes)); //ele troca a chave pelo valor... o valor vira chave e a chave vira valor