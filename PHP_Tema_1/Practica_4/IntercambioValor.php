<?php
    function intercambio($a,$b){
        $c=$b;
        $b=$a;
        $a=$c;
        return $c.=$a.$b;
    }
?>