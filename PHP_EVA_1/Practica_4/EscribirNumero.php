<?php

    // function GeneraVisualizarNum(){
    //     $num=mt_rand(0,100);
    //     while($num!=17 && $num%2==0 && $num!=0 && $num!=1){
    //         print(' <span> '.$num. ' </span> ');
    //         $num=mt_rand(0,100);
    //     }
    // }


    function primo($var){
        $valido = true;
        for ($i=2; $i <= $var/2 && $valido; $i++) { 
            if ($var % $i == 0) {
                $valido = false;
            }
        }
        return $valido;
    }

    function GeneraVisualizarNum(){
        $num=mt_rand(0,100);
        while($num!=17 && !primo($num)){
            print(' <span> '.$num. ' </span> ');
            $num=mt_rand(0,100);
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
        <div>
            <p><?=GeneraVisualizarNum()?></p>
        </div>
 </body>
 </html>