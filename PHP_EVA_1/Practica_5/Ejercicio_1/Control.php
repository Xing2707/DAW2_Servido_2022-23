<?php
    require('ClaseCirculo.php');
    $valor1=new circulos();

    $valor1->setRadio(20);
    $radio=$valor1 -> getRadio();
    echo $valor1 -> getRadio(). "<br>";
   
    echo $valor1 -> getArea(). "<br>";
    $area=$valor1 -> getArea();

    print("area de circulo es:".$area);
?>