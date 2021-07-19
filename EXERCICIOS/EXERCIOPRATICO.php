<?php
//EXERCICIO1
$linha = 1;
$coluna = 1;
while($linha<=10){
    while($coluna<=10){
        echo "-";
        $coluna++;
    }
    $coluna=1;
    echo"</br>";
    $linha++;
}

//exercicio2

for($linha=1;$linha<=20;$linha++){
    for($coluna=1;$coluna<=$linha;$coluna++){
        echo "-";
    }
    echo "<br>";
}
//ex:
for ($i = 0; $i <= 20; $i++) {
    echo str_repeat("-", $i) . "<br/>";
}
