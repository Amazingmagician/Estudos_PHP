<?php
function somar (int $n1, $n2, $n3 = 0) {
    $total = $n1 + $n2+$n3;
    return $total;
}
$soma =somar(10, 20);
//echo "TOTAL é:". $soma;
$z = somar(7,4);
echo $z;
$x = somar (1,2);
$y = somar( 5, 3, 2);
$w = somar($x, $y);

//echo $w;
//se quer adicionar um paranmetro padrão ex ali o N3 = 0
//antes da varieavel eu coloco o tipo que vai receber ex: int