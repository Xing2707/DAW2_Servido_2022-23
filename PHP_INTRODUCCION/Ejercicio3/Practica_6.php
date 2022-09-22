<?php
    $var1=100;
    $var2=rand(1,50);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular</title>
</head>
<body>
        <h1>Calculadora de numero rando</h1>
        <?Php $aray=array($var1+$var2,$var1-$var2,$var1*$var2,$var1/$var2,$var1%$var2)?>
        <p> <?php print_r($aray)?> </p> <br/><br/>
        <!--print_r solo imprimir los que guarda por cada matriz (Si se le da string, integer o float, el valor en sí mismo será impreso. Si le dan un array,
            los valores serán presentados en un formato que muestra las claves y los elementos. Una notación similar se utiliza para objects.
            Cuando el parámetro return es true, esta función devolverá un string. De lo contrario, devolverá true.)-->
        <!--print_r(expresion, valor) 
            si escribe print_r('A' => 'avion', 'M' => 'Metro', 'T' => 'Tren'
            devuelera araay de forma [A]=avion , [M]=metro, [T]=Tren)-->
        <?php $array2=get_defined_vars($arry)?>
        <!-- get_defined_vars() devuelve todo lo que tiene el matriz .(Una matriz multidimensional con todas las variables)->
        <p><?php print_r($array2)?></p>

</body>
</html>