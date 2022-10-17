<?php
    function aleatorio($a=0,$b=0,$c=0){

        if($a==0 && $b==0 && $c==0){
            $a=mt_rand(1,10);
            for($i=$a; $i > 0; $i--){ 
                print(" n ");
            }
        }elseif($a!=0 && $b==0 && $c==0){
            for($i=$a; $i>0; $i--){
                print(" n ");
            }
        }elseif($a!=0 && $b!=0 && $c==0){
            for($i=$b; $i>0; $i--){
                print(" n ");
            }
        }elseif($a!=0 && $b!=0 && $c!=0){
            $aleatorio=mt_rand($c,$b);
            for($i=$aleatorio; $i>0; $i--){
                print(" n ");
            }
        }

    }

    //aleatorio();
    //aleatorio(5);
    // aleatorio(5,50);
    //aleatorio(5,50,-50);

?>