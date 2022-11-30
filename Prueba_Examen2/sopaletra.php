<?php

function iniciarSopaLetras($tablero,int $n,int $m){
    
    $tablero;
    
    for ($i = 0; $i < $m; $i++) { 
        for ($j = 0; $j < $n; $j++) { 
            $tablero[$i][$j] = chr(rand(ord("a"), ord("z")));
        }
    }
    return $tablero;
}


function pintarTablero($tablero){
    echo "<table>";
    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function colocarPalabraHorizontal($tablero, $palabra){

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeY][$ejeX + $i] = substr($palabra,$i,1);
    }

}

function colocarPalabraVertical($tablero, $palabra){

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeX][$ejeY + $i] = substr($palabra,$i,1);

    }
}

function horizontalAlReves(&$tablero, $palabra) {

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeY][$ejeX + $i] = substr($palabra,$caracteresPalabra - $i - 1,1);
    }

}

function verticalAlReves(&$tablero, $palabra) {

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeX + $i][$ejeY] = substr($palabra,$caracteresPalabra - $i - 1,1);
    }

}

function colocaPalabra(&$tablero,$palabra) {

    $aleatorio = random_int(0,3);
    switch ($aleatorio) {
        case 0:
            colocarPalabraHorizontal($tablero,$palabra);
        break;
        case 1:
            colocarPalabraVertical($tablero,$palabra);
        break;
        case 2:
            horizontalAlReves($tablero,$palabra);
        break;
        case 3:
            verticalAlReves($tablero,$palabra);
        break;
        default:
        break;
    }
}


$sopa = [];
$n=mt_rand()*10;
$m=mt_rand()*10;

$sopa = iniciarSopaLetras($sopa,$n,$m);

colocaPalabra($sopa,"jose");

?>