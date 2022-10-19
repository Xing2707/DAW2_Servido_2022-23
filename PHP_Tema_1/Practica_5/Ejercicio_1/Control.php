<?php
    require('ClaseCirculo.php');
    $valor1=new circulos();

    $valor1->setRadio(10);
    $radio=$valor1 -> getRadio();
    echo $valor1 -> getRadio(). "<br>";
   

    $valor1->setArea(100);
    $area=$valor1 -> getArea();
    echo $valor1 -> getArea(). "<br>";


    echo $valor1 -> mostrarPi(). "<br>";
    $pi=$valor1 -> mostrarPi();

    $circuferenica=$radio*($pi*2);

    print("circuferencia de circulo es:". $circuferenica);
?>