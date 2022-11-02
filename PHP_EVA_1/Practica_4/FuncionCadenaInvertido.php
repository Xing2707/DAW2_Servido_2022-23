<?php
    function invertir(string $var){
        $long=strlen($var);
        if($long==1){
            return $var;
        }else{
            $long--;
            return invertir(substr($var,1,$long)).substr($var,0,1);
        }
    }

    $valor="HOLA";
    $valor2=invertir($valor);
    print($valor2);

    //strrev() Funcion que puede invertir palablas
?>