<?php
//$nome = 'CAIO';
//$sobrenome = 'LIMA';


//isso é um simplificaçao codicional ternario.




$nomeCompleto = $nome ?? 'VISITANTE';//caso não tenha nem nome nem sobreno esse é um eX:
//$nomeCompleto .= isset/*significa: está setado */ ($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';//?? siginifa usar a mesma variavel se a variavel declarada existir use ela mesma.
echo $nomeCompleto;