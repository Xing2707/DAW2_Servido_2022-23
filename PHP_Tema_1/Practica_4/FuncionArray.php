<?php
    function ModificaAry(...$valores){
        $acum=0;
        foreach($valores as &$valor){
            if(is_int($valor)){
                for($i=$acum; $i>=0; $i--){
                    $varlor*=$valor;
                }
                $acum++;
            }elseif(is_double($valor)){
                $valor-=($valor*2);
            }elseif(is_string($valor)){
                if( $varlor ===strtoupper($valor)){
                    $valor=strtolower($valor);
                }else{
                    $valor=strtoupper($valor);
                }
            }
            print($valor);
        }
    }

    ModificaAry(3, 10,20,"hola", 'HOLA', [1,2,3], [1], 20.50);
?>