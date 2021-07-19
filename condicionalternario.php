<?php
$idade = 90;
//echo ($idade <18 ) ? 'menor de idade' :'maior de idade';
$menordeidade =($idade < 18) ? true : false;
if($menordeidade){
    echo 'MENOR';

}else{
    echo 'MAIOR';
}