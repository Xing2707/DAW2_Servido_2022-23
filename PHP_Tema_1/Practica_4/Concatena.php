<?php
    $valor=$_GET;
    function concatenas($var){
        $clave=array_keys($var);
        $separador=$var[$clave[0]];
        $palabra=" ";
        for($i=1; $i<count($clave); $i++){
            if($i==count($clave)-1){
                print($var[$clave[$i]]);
            }else{
                print($var[$clave[$i]] .$separador);
            }
        }
    }

    // function concatenar(stirng $sepeardor, array ...$cadenas):string{
    //     $salida= "";
    //     $primero = true;
    //     foreach($cadenas as $cadena){
    //         if($primero){
    //             $primero =false;
    //             $salida=$cadena;
    //         }else{
    //             $salida .= $separador.$cadena;
    //         }
    //         return $salida;   
    //     }
    // }


    // function concatenar(stirng $sepeardor, array ...$cadenas):string{
    //     return implode($separador,$cadenas);  
    // }

    //implode es un funcion que se une el parametro de strng con aary. .hola.mundo
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
    <h1>Concatena cadenas</h1>
        <div>
            <form action="Concatena.php" method="get">
                    separador:<input type="text" name="separador" value="<?=$_GET['separador']?>">
                    cadena1:<input type="text" name="cadena1" value="<?=$_GET['cadena1']?>">
                    cadena2:<input type="text" name="cadena2" value="<?=$_GET['cadena2']?>">
                    cadena3:<input type="text" name="cadena3" value="<?=$_GET['cadena3']?>">
                    <input type="submit" value="Enviar">
            </form> 
        </div>
        <div>
            <p><?=concatenas($valor)?></p>
        </div>
           
</body>
</html>