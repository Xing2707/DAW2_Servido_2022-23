<?php
    $fila = 10;
    $colu = $fila;
    $num = 0;

    function primo($n,$y){
        if(($n+$y) == 0 || ($n+$y) == 1){
            return true;
        }else{
                $esprimo = true;
                $c =2;
            while($esprimo && $c <= (($n+$y)/2)){
                if ((($n+$y) % $c) == 0){
                    $esprimo=false;
                }
                $c++;
            }
            return $esprimo;

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tabla de 0 a 100</title>
            <style>
                table,tr,td{
                    border-collapse: collapse;
                    border:1px solid black;
                }
                table {
                    text-align:cneter;
                    margin: 0px autor;
                }
                .esprimo {
                    background-color:#E1F5FE;
                }
            </style>
    </head>
    <body>
        <table>
           <?php for($i=0; $i < $fila; $i++){ $num=$i*$colu ?>
            <tr>
                <td><?=$num?></td>
                <?php for($y=1; $y < $colu; $y++) { ?>
                    <td <?=(primo($num,$y))?'class="esprimo"':''?>><?=$num+$y?></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
