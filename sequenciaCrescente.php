<?php 
//$arrayRecebido =[1, 3, 2, 1]; //false 2
//$arrayRecebido =[1, 3, 2]; //true 3
//$arrayRecebido =[1, 2, 1, 2]; //false 2
//$arrayRecebido =[3, 6, 5, 8, 10, 20, 15]; //false 2
//$arrayRecebido =[1, 1, 2, 3, 4, 4]; //false 2
//$arrayRecebido =[1, 4, 10, 4, 2]; //false 2
//$arrayRecebido =[10, 1, 2, 3, 4, 5]; //true 2
//$arrayRecebido =[1, 1, 1, 2, 3]; //false 2
//$arrayRecebido =[0, -2, 5, 6]; //true 2
//$arrayRecebido =[1, 2, 3, 4, 5, 3, 5, 6]; //false 2
//$arrayRecebido =[40, 50, 60, 10, 20, 30]; //false 2
//$arrayRecebido =[1, 1]; //true 3
//$arrayRecebido =[1, 2, 5, 3, 5]; //true 2
//$arrayRecebido =[1, 2, 5, 5, 5]; //false 2
//$arrayRecebido =[10, 1, 2, 3, 4, 5, 6, 1]; //false 2
//$arrayRecebido =[1, 2, 3, 4, 3, 6]; //true 2
//$arrayRecebido =[1, 2, 3, 4, 99, 5, 6]; //true 2
//$arrayRecebido =[123, -17, -5, 1, 2, 3, 12, 43, 45]; //true 2
$arrayRecebido =[3, 5, 67, 98, 3]; //true 3

$contagem_de_falsos=null;/* DEININDO VARIAVEIS */
$nIgnorado = null;
if(count($arrayRecebido)>1){/* CONFERE SE O ARRAY ESTÁ VAZIO */
    for($i=0; $i <= count($arrayRecebido); $i++){/* LOOP PARA ENTRAR NO ARRAY ORIGINAL */
        if(array_key_exists($i+1,$arrayRecebido) && array_key_exists($i,$arrayRecebido) && $i !== $nIgnorado){/* CONFERE SE EXISTE O PROXIMO JÁ NO ARRAY */
            if ($arrayRecebido[$i]>=$arrayRecebido[$i+1]){ /* RECONHECE QUE TEM QUE ADICIONAR UM A CONTAGEM DE MAIORES */
                if(array_key_exists($i+2,$arrayRecebido)){/* VERIFICA SE EXISTE UM TERCEIRO VALOR */  
                    if($contagem_de_falsos===null){/* SE CONTADOR AINDA NÃO FOI ALTERADO */
                        $contagem_de_falsos=3;/* ALTERA O VALOR DELE PARA ATIVO (3) */
                    }
                    while($contagem_de_falsos===3){/* VERIFICA SE O CONTADOR ESTÁ ATIVO */
                        /* SE O TERCEIRO VALOR FOR O ULTIMO DO ARRAY E FOR MAIOR QUE O ATUAL REMOVE O NUMERO ENTRE ELES */
                        if($arrayRecebido[$i+2] === end($arrayRecebido) && end($arrayRecebido) > $arrayRecebido[$i]){
                            unset($arrayRecebido[$i+1]);/* REMOVE DO ARRAY */
                        }else{/* SE NÃO FOR O ULTIMO REMOVE O ATUAL QUE É MAIOR */
                            unset($arrayRecebido[$i]);/* REMOVE DO ARRAY */                                
                        }                    
                        $nIgnorado=$i;/* CASO PRECISE EM ROTAÇÕES NO MESMO ARRAY O INDEX AUSENTE FICA SALVO */
                        $contagem_de_falsos=1;/* REEGISTRA QUE JÁ FOI FEITA UMA MOVIMENTAÇÃO NO ARRAY ATUAL */
                    }
                    $novoArray=[];/* CRIA UM NOVO ARRAY VAZIO */
                    foreach ($arrayRecebido as $valor) {
                        array_push($novoArray,$valor);/* PASSA OS VALORES SEM O MAIOR PARA O NOVO ARRAY */
                    }
                    $indexNovoArray = count($novoArray);/* SALVA O TAMANHO DO NOVO ARRAY */
                    $trues=null;/* CONTA QUANTOS VALORES EM ORDEM FORAM ENCONTRADOS */
                    for ($y = 0; $y < $indexNovoArray; $y++){/* LOOP NO NOVO ARRAY SEM O ELEMENTO REPETIDO */
                        if(array_key_exists($y+1,$novoArray)){/* JÁ CONFERE SE EXISTE UM PROXIMO NUMERO */
                            if($novoArray[$y] >= $novoArray[$y+1]){/* SE O NUMERO ATUAL FOR MAIOR OU IGUAL AO PROXIMO */
                                echo 'false';
                                return false;/* RETORNA FALSE */
                            }else{
                                $trues++;/* EM CADA NUMERO DO ARRAY QUE FOR MENOR QUE O PROXIMO ADICIONA 1 AO TRUE */
                            }
                        }if($trues === $indexNovoArray-1){/* SE O VALOR DE TRUE CHEGAR A QUANTIDADE DE NUMEROS */
                            echo 'true';
                            return true;/* RETORNA TRUE */
                        }
                    }               
                }elseif(!array_key_exists($i+2,$arrayRecebido)){/* CONFERE SE O VALOR QUE FOI RECONHECIDO COMO MENOR É O ULTIMO DO ARRAY */
                    if($contagem_de_falsos===null){
                        echo 'true';
                        return true;/* JÁ RETORNA TRUE */
                    }
                }
            }
        }
    }
}