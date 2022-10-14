<?php
    function aleatorio($a,$b,$c){
        $a="";
        $b="";
        $c="";

        if($a=null && $b=null && $c=null){
            $a=mt_rand(1,10);
            for($i=$a; $i > 0; $i--){ 
                print(" n ");
            }
        }elseif($a!=null && $b=null && $c=null){
            for($i=$a; $i>0; $i--){
                print(" n ");
            }
        }elseif($a!=null && $b!=null && $c=null){
            for($i=$b; $i>0; $i--){
                print(" n ");
            }
        }elseif($a!=null && $b!=null && $c!=null){
            $aleatorio=mt_rand($c,$b);
            for($i=$aleatorio; $i>0; $i--){
                print(" n ");
            }
        }

    }

    aleatorio();
    aleatorio(5);
    aleatorio(5,50);
    aleatorio(5,50,-50);

?>