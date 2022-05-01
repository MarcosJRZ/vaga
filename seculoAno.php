<?php

$ano=1001;

if($ano>=0 && $ano %100!=0){
    $seculo=(intval($ano/100)+1);
    echo 'Século: '.$seculo;
}elseif($ano>=0 && $ano %100==0){
    $seculo=$ano/100;
    echo 'Século: '.$seculo;
}else{
    echo('ERRO!');
};
