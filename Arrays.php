<?php

//Arrays Indexados, Asociativos, Multidimensionales.

$array = [1,2,3,4];

    $array1[]=1;
    $array1[]=2;
    $array1[]=3;
    $array1[]=4;

    var_dump($array);
    echo "</br>";
    var_dump($array1);
    $arrayAsociativo = ["Nombre"=>"Jeffer", "Apellido" => "Gonzalez"];
    var_dump($arrayAsociativo);

    $arrayMultidimensional = [
        ["Nombre"=>"Jeffer", 
        "Apellido" => "Gonzalez"
        ],

        ["2Nombre" => "David", 
        "2Apellido" => "Cely"
        ],

    ];
    var_dump($arrayMultidimensional[1]["2Nombre"]);
