<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => null,
    'Roberto' => 7,
    'Igor' => 6
];
$array= [
    0 =>'um',
    1 => 'dois',
    2 => 'tres'
];

//rsort($notas); //ordena de forma decrescente
//asort(); //masntem as chaves e ordena crescente
//arsort($notas); //mantem as chaves e ordena decrescente
//ksort($notas); //ordenada pelas chaves em ordem alfabetica (ignora o valor)
krsort($notas); //ordenada pelas chaves em ordem alfabetica reversa (ignora o valor)
var_dump($notas);

if ( gettype($notas) === 'array') {//retorna o tipo da variável
    echo 'Sim, é um array' . PHP_EOL;
}

if ( is_array($notas)) {//verifica se é um array
    echo 'Sim, é um array2' . PHP_EOL;
}

var_dump(array_is_list($notas)); //recebe um array como parametro e retorna verdadeiro se esse array for um array numérico, ou seja, se todas as suas chaves são numeros, ele começa do 0 e a partir do 0 são todas crescentes

var_dump(array_is_list($array)); //recebe um array como parametro e retorna verdadeiro se esse array for um array numérico, ou seja, se todas as suas chaves são numeros, ele começa do 0 e a partir do 0 são todas crescentes

echo 'Igor fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Igor', $notas)); //espera dois paramentos, a "chave" que eu quero buscar e onde eu quero buscar. Me informa se o "Igor" se encontra neste array
//array_key_exists = verifica se a chave existe
//isset = verifica se a chave existe e não é nula
//in_array = verifica se o valor existe

echo 'Ana fez a prova? True para Sim e False se ela faltou e ficou com a nota nula: ' . PHP_EOL;
var_dump(isset($notas['Ana'])); //verifica se a chave existe e se ela é DIFERENTE de null

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas)); //serve para verificar se teve alguma nota 10 no array que eu passar obs: se eu colocar outro parametro: 10, $notas, true, ele faz uma verificação mais precisa, se no caso eu fizesse 10 = '10' o php encontraria se fossem só dois parametros, mas se eu colocar , true, ele faria uma comparação a risca e retornaria false

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas, true); //me retorna a chave (neste caso, o nome) de quem tirou 10 no meu array $notas