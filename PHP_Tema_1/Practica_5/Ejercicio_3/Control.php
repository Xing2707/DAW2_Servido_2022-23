<?php
    require('CocheGrua.php');

    $coche1 =new coche;
    $coche1 -> setMatricula("1000");
    $coche1 -> setMarca("BMV");
    $coche1 -> setCarga(30);
    // $coche1 -> pintarInformacion();

    $coche2 =new cocheConRemolque;
    $coche2 -> setMatricula("1001");
    $coche2 -> setMarca("Renault");
    $coche2 -> setCarga(30);
    $coche2 -> setCapacidad(200);
    // $coche2 -> pintarInformacion();

    $coche3 =new coche;
    $coche3 -> setMatricula("1002");
    $coche3 -> setMarca("Porche");
    $coche3 -> setCarga(40);
    // $coche3 -> pintarInformacion();

    $coche4 =new cocheGrua;
    $coche4 -> setMatricula("1003");
    $coche4 -> setMarca("Ford");
    $coche4 -> setCarga(20);
    $coche4 -> Cargar($coche3);
    // $coche4 -> pintarInformacion();

    $coche5 =new cocheConRemolque;
    $coche5 -> setMatricula("1005");
    $coche5 -> setMarca("Nissan");
    $coche5 -> setCarga(22);
    $coche5 -> setCapacidad(250);
    //$coche5 -> pintarInformacion();

    $coche6 =new cocheGrua;
    $coche6 -> setMatricula("1007");
    $coche6 -> setMarca("Kia");
    $coche6 -> setCarga(30);
    $coche6 -> Cargar($coche5);
    // $coche6 -> pintarInformacion();

    $ary;
    
    $ary=[$coche1,$coche2,$coche4,$coche6];
    print_r($ary);
    array_walk($ary,function($item) {$item -> pintarInformacion();})
?>
