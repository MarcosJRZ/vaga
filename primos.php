<?php
/* definição dos valores iniciais e finais */
$valorInicial=10;
$valorFinal=29;
/* se o valor inicial for menor que o final e ambos forem inteiros */
if ($valorInicial<$valorFinal && is_int($valorFinal) && is_int($valorInicial))  {
  /* adiciona um no valor inicial para pular ele */
  $valorInicial+=1;
  /* inicia os arrays */
  $arrayPrimos=[];
  $normais=[];
  
  /* for que vai do começo ao final inseridos */
  for($i=$valorInicial; $i<$valorFinal; $i++){
    /* adiciona todos os valores no array de primos*/
    array_push($arrayPrimos,$i);    
    for($x=2; $x<$i; $x++){
      if($i % $x === 0){
        /* cria o sem os primos */
        array_push($normais,$i);
      }
    }
  }
  /* pra cada numero normal */
  foreach ($normais as $normal) {
    /* pesquisa o numero atual na lista de primos */
    $key = array_search($normal, $arrayPrimos);
    /* se estiver na lista */
    if($key!==false){
      /* remove */
      unset($arrayPrimos[$key]);
    }
  } 
  /* para cada numero primo */
  foreach(array_unique($arrayPrimos) as $normal){
    /* mostra na tela */
    echo($normal.' ');
  };
}