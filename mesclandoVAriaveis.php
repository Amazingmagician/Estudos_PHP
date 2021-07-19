<?php
$nome = 'caio'; //string tanto aspas simples como aspas duplas.
$sobrenome = 'lima';
//mesclando variaveies.
//$nomeCompleto = $nome. ' ' .$sobrenome;//exemplo de contatenação
$nomeCompleto = "$nome $sobrenome";//exemplo de contatenação com aspas duplas que interpreta valor.
//$nomeCompleto = "$nome $sobrenome";//quando colocar com '' simples o php interpreta como tudo literal ex: um nome.
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;//com o . ele mescla as strings sem o ponto ele apenas substitui. contatenou tanto +,/,* tanto faz.
echo $nomeCompleto;
//
$x = 3;
$y = 4;
$w = $x+$y;
echo $w;
