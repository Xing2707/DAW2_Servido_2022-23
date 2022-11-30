<?php
    function pintaCabezera(string ...$th){
            echo"<tr>";
            foreach($th as $valo){
                echo "<th>".$valo."</th>";
            }
            echo"</tr>";
    }

    function pintaContenido(string ...$td){
            echo"<tr>";
            foreach($td as $valo){
                echo "<td>".$valo."</td>";
            }
            echo"</tr>";
    }

    function pintaHorarioVacio(int $horaI,int $horaF){
        $hora=[];
        for($i=$horaI; $i<=$horaF; $i++){
            array_push($hora,"$i:00");
        }
        echo"<table>";
            pintaCabezera(" ","Lunes","Martes","Miercoles","Jueves","Viernes");
            array_walk($hora,function($item,$key){
                pintaContenido($item," "," "," "," "," ");
            });
        echo"</table>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 3px solid blue;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <?=pintaHorarioVacio(9,22)?> <!--Este funcion estaba parametrizado con parametro-->
    </table>
</body>
</html>