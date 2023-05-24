<?php

$alunos2021 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Igor'
];

$novosAlunos = [
    'Patricia',
    "Nico",
    'Kilderson',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos); //une varios arrays

var_dump($alunos2022);

$alunos2023 = $alunos2021 + $novosAlunos; //faz o mesmo que o array_merge, porém, só funciona se tiver chaves numericas

var_dump($alunos2023);

//O operador + sempre usa as chaves do primeiro array e nunca sobrescreve seus valores com o do segundo.
//Alternativa correta! Já o array_merge tem 2 comportamentos. Com strings como chaves, em caso de chaves duplicadas, ele
// sobrescreve os valores dos primeiros arrays com os valores das mesmas chaves dos arrays posteriores. Já em caso de chaves numéricas
// ele simplesmente adiciona os elementos dos arrays posteriores ao final dos arrays anteriores.


 //...é o que usamos para desempacotar um array (abrir ele) ele abre o array (tira os colchetes) e traz cada um dos elementos dele, igual ao array_merge. Pose encontr-alo como array unpacking

$alunos2024 = [...$alunos2021, 'Lestian', ...$novosAlunos]; //ele me dá mais flexibilidade pois o array_merge só funciona com arrays, já esse cara, eu posso adicionar qualquer elemento à ele


//procurar tambem por spread operator, que tbm tem esse simbolo ...

array_push($alunos2024, 'Alice', 'Bob', 'Charlie'); //adiciona os valores ao final do array existente
$alunos2024[] = 'Luiz'; //adiciona apenas um elemento ao raay, torna desnecessario o uso da função

array_unshift($alunos2024, 'Stephane', 'Rafaela'); //faz o mesmo que o array_push, porem adiciona no inicio do array

echo array_shift($alunos2024) . PHP_EOL; //pega o primeiro elemento e remove do array, depois reorganiza os que restaram e retorna o elemento removidp

echo array_pop($alunos2024) . PHP_EOL; //faz o mesmo que o array shift só que ele remove o ultimo elemento e retorna ele

var_dump($alunos2024);
