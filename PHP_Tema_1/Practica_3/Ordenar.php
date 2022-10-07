<?php
    $valo1;

    function rellenar(){
        global $valo1;
        for($i=0; $i<20; $i++){
            $valo1[$i]=rand(1,100);
        }
    }
    rellenar();
    print("Array con 20 numero aleatorios <br>");
    print_r($valo1);

    sort($valo1);
    print("<br> Array ordenado <br>");
    print_r($valo1);

    $valo2=array_slice($valo1,count($valo1)/2);
    print("<br> Medio Array <br>");
    print_r($valo2);

    for($i=0; $i<count($valo1)/2; $i++){
        array_push($valo2,$valo1[$i]);
    }
    print("<br> Array al reves <br>");
    print_r($valo2);

?>