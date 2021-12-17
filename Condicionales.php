<?php

 //CONDICIOANLES

 if($int = 1){
    var_dump($int); 
}else{
    var_dump($int);
}

switch ($int) {
    case '1':
        echo "Entre al caso 1";
        break;
    
    default:
        echo "Esto es un default";
        break;
}

echo "</br>";

$resultado = $int = 1 ? "El valor es 1" : "El valor es diferente de 1";
echo $resultado;