<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Igor',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas (array $nota1, array $nota2): int
{
//    if ($nota1['nota'] > $nota2['nota']) {//comparo o indice nota nos arrays
//        return -1; //significa que o primeiro elemento vai vir antes do segundo elemento, retorno qualquer numero negativo
//    }
//    if ($nota2['nota'] > $nota1['nota']) {
//        return 1; //informo que o segundo elemento vem primeiro, retorno um numero positivo
//    }
//    return 0; //significa que as nots são iguais, pois não cairam em nenhum dos if's anteriores

    return $nota2['nota'] <=> $nota1['nota']; //essa linha faz exatamente oq todas as linhas acima fazem. Se o primeiro elemento antes do operador for menor que o segundo, ele retorna -1, se o primeiro elemento for maior, ele retorna 1 e se forem iguais, ele retorna 0. Isso vai ordenar em ordem crescente
    //para fazer em ordem decrescente, é só trocar as variaveis de lugar : $nota2['nota'] <=> $nota1['nota']
}

usort($notas, 'ordenaNotas'); //função sort que ordena meu array (atenção ao &, ele significa que vai pegar op array original e ordená-lo), para evitar isso, eu copiei o arrey notas para a variavel $notas ordenadas
//usort é um ordenação passada pelo USUARIO através de uma função, é só passar o nome da função que vai servir de regra entre aspas simples
var_dump($notas); //funcao que exibe uma variavel contendo seu tipo, sua estrutura, etc. é algo que utilizamos para visualizar um dadoecho 'Desordenadas: ';


?>