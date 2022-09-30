<?php 
    $val1=[];
    $val2=[];
    $val3=["","","","","","","","","","","","","","","","","","","",""];
    $val4=[];


    function rellenar(){
        $num=20;
        for($i=0; $i<$num; $i++){
            $var[$i]=rand(1,10);
        }
        return $var;
    }

    $val1=rellenar();
    $val2=rellenar();

    print("valor 1: <br> ");
    print_r($val1);
    print("<br> valor 2: <br> ");
    print_r($val2);

    $val3=array_intersect($val1,$val2);

    print("<br> valor 3: <br> ");
    print_r($val3);


?>