<?php
$comida = [
0 => ["Banana", 3, 56],
1 => ["Chuleta", 1, 256],
2 => ["Pan", 1, 90],
];

function suma($var, $sum){
    $var+=$sum;
    return $var;
}

function caloria($var){
    $cal;
    for($i=0; $i<count($var); $i++){
        $cal[$i]= $var[$i][2];
    }
    return $cal;
}

$calor=caloria($comida);

var_dump(array_reduce($calor,"suma"));


?>