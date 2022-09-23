<?php
$_GET;
if(isset($_GET['descripcion'])){
    $des=$_GET['descripcion'];
}

function calcular_caracter(){
    $num_voc=0;
    $num_con=0;
    for($i=0; $i< strlen($des); $i++){
        $car=$des[$i];
        print("$car");
        print("$des[i]");
        if((ord($car)< 65 && ord($car)>90) || (ord($car)<97 && ord($car)>122)) {
            
        }else{
            if(ord($car)== 65 || ord($car)== 97 || ord($car)== 69 || ord($car)== 101 || ord($car)== 73 || ord($car)== 105 || ord($car)== 79 || ord($car)== 111 || ord($car)== 85 || ord($car)== 117){
                $num_voc+=1;
            }else
                $num_con+=1;
        }
    }
    print("numero vocal $num_voc ");
    print("numero consonante $num_con ");
}

function palitromo(){
    $fin=strlen($des)-1; 

    for($i=0; $i<(strlen($des)/2); $i++){
        if($des[$i] == $des[$fin]){
            print($des[$i]);
            print($des[$fin]);
            $pal=true;
            $fin-=1;
        }else{
            $pal=false;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
        #fondo{
            height: 80%;
            width: 80%;
            margin: 0px auto;
            margin-top: 10%;
            border: 5px inset chartreuse;
        }
        #formulario{ 
            border: 2px solid red;
            margin:0px auto;
            margin-top: 5%;
            margin-bottom: 5%;
            height: 70%;
            width: 70%;
        }
        body{
            background-color: aqua;
        }
        #contenido{
            margin:0px auto;
            height: 70%;
            width: 70%;
        }
    </style>
</head>
<body>
    <div id="fondo">
        <div id="formulario">
        <form action="Practica_1.php" methor="get">
            <fieldset>Formulario: <br/>
                descripcion: <input type="text" name="descripcion" id="" value='<?=$des?>'> <br/>
                <input type="submit" value="enviar">
                
            </fieldset>
        </form>

        </div>
        <div id="contenido">
            <?php if($_GET) { ?> 
                <p>
                    <?php 
                        $num_voc=0;
                        $num_con=0;
                        for($i=0; $i< strlen($des); $i++){
                            $car=$des[$i];
                            if(((ord($car)< 65 && ord($car)>90) || (ord($car)<97 && ord($car)>122)) && is_integer($car))  {

                            }else{
                                if(ord($car)== 65 || ord($car)== 97 || ord($car)== 69 || ord($car)== 101 || ord($car)== 73 || ord($car)== 105 || ord($car)== 79 || ord($car)== 111 || ord($car)== 85 || ord($car)== 117){
                                    $num_voc+=1;
                                }else{
                                    $num_con+=1;
                                }
                            }
                        }

                        $fin=strlen($des)-1; 
                    
                        for($i=0; $i<(strlen($des)/2); $i++){
                            if($des[$i] == $des[$fin]){
                                $pal=true;
                                $fin-=1;
                            }else{
                                $pal=false;
                            }
                        }
                    ?>

                </p>
            <ul>
                <li>numero de vocales: <?=$num_voc?></li>
                <li>numero de consonantes:<?=$num_con?></li>
                <li>palindromo: <?php if($pal){print("Si");} else{print("No");}?> </li>
            </ul>
            <?php }?>
        </div>
    </div>
</body>
</html>