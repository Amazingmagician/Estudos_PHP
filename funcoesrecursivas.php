<?php
//funcoes recursivas  indica  que ela executa ela mesma internamente
function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if (round($metade) >0){
        dividir($metade);
    }
}
dividir(100);
//o round faz com que o numero fique inteiro. ou seja 0,11111 ele vira 1...
/*por exeplo um sistema que navega em pasta ele vai usar a mesma função que escaneou a mesma pagina. 
ou seja uma pasta dentro de outra até não ter mais nenhuma pasta.