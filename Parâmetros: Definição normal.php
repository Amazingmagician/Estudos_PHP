<?php
function somar ( $n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}
$soma =somar(10, 20);
//echo "TOTAL é:". $soma;

$x = somar (1,2);
$y = somar( 5, 3);
$w = somar($x, $y);

echo $w;