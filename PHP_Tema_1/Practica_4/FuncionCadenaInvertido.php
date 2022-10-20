<?php
    function invertir(string $var){
        if(strlen($var)==0){
            return $var;
        }else{
            return invertir($var[strlen($var)-1])+$var[0];
        }
    }

    $valor="HOLA";
    $valor2=invertir($valor);
    print($valor2);
?>