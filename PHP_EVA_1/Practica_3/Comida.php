<?php
$comida = [
0 => ["Banana", 3, 56],
1 => ["Chuleta", 1, 256],
2 => ["Pan", 1, 90],
];

function suma($sum, $var){   //en el parte de sum se corre todo el array
    
    return $sum +=( $var[1] * $var[2]);
}

var_dump(array_reduce($comida,"suma"));

?>