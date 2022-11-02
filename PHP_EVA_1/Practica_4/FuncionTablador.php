<?php 
    $cosas = [
        3,
        "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
        "números" => [1, 2, 3, 4, 5, 6],
        "hoyos"   => ["primero", 5 => "segundo", "tercero"],
        "asd",
    ];

    function pintar($item,$clave){
        if(is_array($clave)){
            print(gettype($clave)."<br>");
            print("___".$item."<br>");
        }else{
            print($item);
        }
    }

    function imprimir(array $valor){
        array_walk($valor,'pintar');
    }

    imprimir($cosas);
?>