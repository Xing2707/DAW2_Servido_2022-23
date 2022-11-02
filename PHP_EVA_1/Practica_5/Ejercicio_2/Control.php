<?php
require('CuentaBancaria.php');

    $cuenta1=new CuentaBancaria("Milloneti",1000000);
    $cuenta2=new CuentaBancaria("Agapito",30345);
    $cuenta3=new CuentaBancaria("Pobreton",-10000);

    function veces(int $num,object $c){
        for($i=0; $i<$num; $i++){
            $c -> retirar(1000);
        }
    }
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
        <?=
            $cuenta1 -> mostrar();
            $cuenta2 -> mostrar();
            $cuenta3 -> mostrar();
        ?><br>

        <?=
            veces(100,$cuenta1);
            $cuenta1 -> mostrar();
        ?><br>

        <?= 
            $cuenta2 -> ingresar(1200);
            $cuenta2 -> mostrar();
        ?><br>

        <?=
            $cuenta3 -> unirCon($cuenta1);
            $cuenta3 -> mostrar();
        ?><br>

        <?=
            $cuenta2 -> transferirA($cuenta1,$cuenta2 ->saldo()/2);
            $cuenta1 -> mostrar();
            $cuenta2 -> mostrar();
        ?><br>
</body>
</html>