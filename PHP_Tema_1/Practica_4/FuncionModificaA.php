<?php
    function ModificaAry(...$valores){
        $acum=1;
        foreach($valores as &$valor){
            if(is_int($valor)){
                $cont=$acum;
                $valor2=$valor;
               while($cont>0){
                $valor2*=$valor;
                $cont--;
               }
                $valor=$valor2;
                $acum++;
            }elseif(is_double($valor)){
                $valor-=($valor*2);
            }elseif(is_string($valor)){
                if( ctype_upper($valor)){
                    $valor=strtolower($valor);
                }else{
                    $valor=strtoupper($valor);
                }
            }
            
            if(is_array($valor)){
                print_r($valor);
                print("<br>");
            }else{
                print($valor."<br>");
            }
        }
    }
    ModificaAry(3,10,20,"hola", 'HOLA', [1,2,3], [1], 20.50);
?>