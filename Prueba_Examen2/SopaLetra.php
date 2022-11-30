<?php
    $table=[];
    $n=mt_rand(0,10);
    $m=mt_rand(0,10);
    
    function inicializarSopaLetras($tablero,$n,$m){
        for($i=0; $i<$n; $i++){
            for($y=0; $y<$m; $y++){
                $tablero[$i][$y]=chr(mt_rand(65,90));
            }
        }
    }

    function pintaTablero($tablero){
        echo "<table>";
        for($i=0; $i<count($tablero); $i++){
            echo "<tr>";
            for($y=0; $y<count($tablero[$i]); $y++){
                echo"<td>".$table[$i][$y]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // pintaTablero($tablero)
    // colocaPalabraHorizontal($tablero, $palabra);
    // colocaPalabraVertical($tablero, $palabra);
    // colocaPalabraHorizontalAlreves($tablero, $palabra);
    // colocaPalabraVerticalAlreves($tablero, $palabra);
    // colocaPalabra($tablero, $palabra);

    inicializarSopaLetras($table,$n,$m);
    print_r($table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?=pintaTablero($table)?>
</body>
</html>