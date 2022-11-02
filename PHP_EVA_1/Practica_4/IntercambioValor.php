<?php
    function intercambio($a,$b){
        $c=$b;
        $b=$a;
        $a=$c;
        return $f.=$a.$b;
    }

    $valor=intercambio(10,9);

    print($valor);
?>