<?php   
//$nomecompleto = 'caio lima Bezerra';

/*$posição = strpos($nomecompleto, 'w');
if($posição > -1){
        echo "Achou";

}else{
    echo "Não Achou:";
}*/
//echo ucfirst($nomecompleto);//deixa a primeira letra maiuscula 
//echo ucwords($nomecompleto);//deixa todas as primeiras letras maiusculas
//$nomes = explode(' ',$nomecompleto);//expode vai usar muito em sistemas reais 
//print_r($nomes);
$numero =12313.12;

echo 'R$', number_format($numero, 1, ',', '.');
