<?php
//Estructuras repetitivas (WHILE Y DO WHILE) 

$i=1; 

while ($i <= 10){
   echo " Hola mundo <br>";
 $i++;
}

$i=10;

while($i < 10){
   echo "Hola mundo";
   $i++;
}
  echo " ha salido del bucle"; 

//do while

$i=10;

   do {

   echo "Hola mundo <br>";
   $i++;

  }while($i < 10);
   
  echo " ha salido del bucle";


$i=8;

   do {

   echo "Hola mundo <br>";
   $i++;

  }while($i < 10);
   
  echo " ha salido del bucle"; 

$base =2;
$exp =5;

$resultado =1;
$i=1;


  while ($i<= $exp){
      $resultado = $resultado * $base;
      $i++;
  }
   echo "El valor de $base elevado a la $exp es: $resultado"; 



// Estructuras repetitivas II (FOR Y FOREACH)

$base = 5; 
$exp = 4;

$resultado = 1;

for ($i =0; $i <= $exp; $i++){
   $resultado=$resultado * $base;
}

echo "El valor de $base elevado a la $exp es: $resultado";


$filas = 10;

for ($i =1; $i <= $filas; $i++){
   for( $j=1; $j <= $i; $j++){
         echo "*";
   }
   echo "<br>";
} 


