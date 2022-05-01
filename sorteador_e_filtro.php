<?php 
/* definindo os arrays vazios */
$sorteados=[];
$naoRepetidos=[];

/* loot para criar o array aleatório de 20 */
for($i = 1; $i<21; $i++){
    /* para cada ação do loop adiciona um numero aleatorio no array */
    array_push($sorteados,rand(1,10));
} 

for($i = 0; $i<20; $i++){
    /* define uma variavel para o numero atual */
    $numeroAtual = array_slice($sorteados,0,1);
    /* remove o valor do array de sorteados */
    unset($sorteados[$i]);
    /* se não tiver um valo igual ao removido no array de sorteados */
    if(!in_array($numeroAtual[0],$sorteados)){
        /* adiciona esse valor no que não se repete */
        array_push($naoRepetidos,$numeroAtual[0]);
        /* remove o valor do array do numero atual */
        unset($numeroAtual[0]);
    }
    /* se tiver um valor igual no array de sorteados */
    elseif(in_array($numeroAtual[0],$sorteados)){
        /* devolve o valor para o array */
        array_push($sorteados,$numeroAtual[0]);
        /* remove o valor do array do numero atual */
        unset($numeroAtual[0]);
    }
} 
/* exibe os numeros que não se repetem */
foreach ($naoRepetidos as $numero) {
    echo ("$numero ");
}