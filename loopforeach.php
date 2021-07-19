<?php
$ingredientes =[
    'açucar',
    'farinha',
    'ovo',
    'leite',
    'fermento'

];
//o foreach pega o valor da chave valor[].

//EX:1
foreach($ingredientes as $ingredientes){
    echo "item: ".$ingredientes."<br/>";
}

//EX:2 chave é o valor vão aparecer.
echo '<h2>Ingrediente</h2>';
foreach($ingredientes as $chave => $valor){
echo "item: ".$chave.":".$valor."<br/>";
}

//EX:3 ira icrementar mais um é a lista ficará ordenada.
foreach($ingredientes as $chave => $valor){
    echo "item: ".($chave+1).":".$valor."<br/>";
    }
//Ex: 4 vira uma lista. desordenada.
echo '<ul>';
    foreach($ingredientes as $valor){
        echo '<li>'.$valor.'</li>';
        }
        echo '</ul>';