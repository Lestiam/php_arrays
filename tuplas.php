<?php
//tupla é um pequeno conjunto de elentos que a posição dele pode significar alguma coisa. Ex:
//Em uma linguagem chamada Elixir, é muito comum que os resultados de uma operação que pode dar erro seja uma tupla onde
// o primeiro elemento é o resultado se deu ok ou se deu erro, e o segundo elemento é o que você esperava de retorno ou a mensagem de erro em caso de erro.
//Por exemplo: se eu quero abrir um arquivo eu vou retornar uma tupla dizendo ok ou em caso de erro eu tenho aqui a
// mensagem de erro nesse segundo elemento da tupla.

$dados = ['Igor', 10, 30];
$dados2 = [
    'nome' => 'Igor',
    'nota' => 10,
    'idade' => 30
];
//list($nome, $nota, $idade) = $dados; //o list pega os dados que não estão assignados depois do = e os aloca em variaveis separadas por virgula
//posso fazer assim que da o mesmo resultado: [$nome, $nota, $idade] = $dados; Por baixo dos panos, ele esta chamando a função list

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados2; //da para fazer assim tambem, passando chaves em string

extract($dados2); //esse cara extrai as chaves do meu array e automaticamente transforma ela em variaveis. Pega um array e cria varias variaveis

var_dump(compact('nome', 'nota', 'idade')); //faz o oposto do de cima, pega varias variaveis e transforma num array, onde a chave vai ser o nome da variavel e o valor vai ser o valor da variavrl
var_dump($nome, $nota, $idade);