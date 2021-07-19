<?php
$bolo1 = [   
      'açucar',     
      'farrinha',   
      'ovo',    
      'leite', 
      'fermento'    
    ];
    $bolo2 = [  
        'vasilha',
        'agua morna',
        ...$bolo1, 
        'corante'  
      ];
      echo $bolo2[7];
      print_r($bolo1);//comando pra ver tudo que está dentro de um array. 