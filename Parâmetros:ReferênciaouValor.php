<?php
function somar ($n1, $n2, &$total){
    $total = $n1 + $n2;
    //return $total;
}

//Passagem por referencia e quando o: '&'| 
//altera a referencia que nesse caso foi soma. 
//assim não precisa do return. 
//ou seja tudo que etava dentro da função foi espelhado pra fora. uma referencia.
$x = 2;//
$y = 5;// foram enviados como valor, ja soma foi enviado como referencia. 
$soma = 0;
somar ($x, $y, $soma);


//passagem por valor:

/*$x = 2;
$y = 5;
$soma = somar ($x, $y);*/

echo "TOTAL: ". $soma;

//echo somar (10 , 5);

// "sort" essa funçao ordena do menor para o maior o array que eu mandar detro da variavel. 
//ele suga a variavel mexe e altera ela. 1,5,3 dps de sort 1,3,5;