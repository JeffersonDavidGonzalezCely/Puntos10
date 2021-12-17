<?php

// BREAK Y CONTINUE  

for ($i =1; $i <= 20; $i++){
       if($i ==11){
         break;
         //  este break lo que hace es que me obliga a salir del programa
      }

       if ($i == 7 || $i == 15 ){
            continue;
        // este continue lo que hacer ignorarlo y seguir con el programa
      } 

      if ($i == 7 || $i == 15 ){
         exit();
    //  para salir del bucle se puede usar "exit o die"
   }

     echo $i . "<br>"; 
}
 echo "saliste del bucle";
