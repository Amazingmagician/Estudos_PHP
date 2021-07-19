<?php
    $dizimo = function(int $valor){
        return $valor * 0.1;
    };
$funcao = $dizimo;
    echo $funcao(90);
    //echo $dizimo(80);

    /*algumafuncao(10, function(){
        blablabla
    });*/