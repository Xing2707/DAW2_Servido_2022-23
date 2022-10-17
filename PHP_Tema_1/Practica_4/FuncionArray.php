<?php 
    function tipo(...$valores){
        foreach($valores as &$var){
            $var=[gettype($var) => $var];
        }
        return $valores;
    }
    $analisis = tipo(3, "h", 'hola', [1,2,3], [1], "h");
    print_r($analisis);
?>