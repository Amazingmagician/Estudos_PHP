<?php
//tirar os espaços.
//$nome = '    caio   ';
//echo trim($nome);

//numero de caracteresde uma string:
/*$nomesujo = '   caio  ';
$nomelimpo = trim($nomesujo);
echo "NOME SUJO: ".strlen($nomesujo).'<br/>';
echo "NOME LIMPO: ".strlen($nomelimpo);*/

/*letra maiuscula é minuscula.
$nome = 'caio';
echo strtolower($nome);
echo strtoupper($nome);*/
//substituir o nome ex:v
$nome = 'caio lima';
$nomeAlterado = str_replace('lima','bezerra',$nome);

//echo $nomeAlterado;
//pegar qauntidade de caracteres:
$nomeCompleto = 'caio lima';

$nome = substr($nomeCompleto,0,3);

echo $nome;


