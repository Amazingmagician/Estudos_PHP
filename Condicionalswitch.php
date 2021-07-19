<?php
$tipo = 'foto';
/*if($tipo == 'foto'){
    echo 'exibindo uma foto';

}
if($tipo == 'video'){
    echo 'Exibindo um video';

}
if($tipo == 'texto'){
    echo 'Exibindo um Texto';
}*/
switch($tipo){
    case 'foto';
    echo 'Exibindo FOTO';
    break;
    case 'video';
    echo 'exibindo VIDEO';
    case 'texto';
    echo 'Exibindo TEXTO';
    break;
}
