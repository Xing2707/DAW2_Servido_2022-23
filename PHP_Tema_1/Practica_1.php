<?php
$num_voc=0;
$num_con=0;
$pal;
$_GET;
$des=$_GET['descripcion'];

function calcular_caracter(){
    for($i=0; $i< strlen($des); $i++){
        $car=$des[$i];
        if(($car<(chr(65) && $car>(chr(90))) || ($car<(chr(97) && $car>(chr(122)))))) {
            
        }else{
            if($car== chr(65) || $car== chr(97) || $car== chr(69) || $car== chr(101) || $car== chr(73) || $car== chr(105) || $car== chr(79) || $car== chr(111) ||$car== chr(85) || $car== chr(117)){
                $num_voc+=1;

            }else
                $num_con+=1;
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
                descripcion: <input type="text" name="descripcion" id="" value="<?=$des?>"> <br/>
                <input type="submit" value="enviar">

                <p><?=$des?></p>
                
            </fieldset>
        </form>
        </div>
        <div id="contenido">
            <p>
                <?php
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
                ?>
            </p>
            <?php if($_GET) { ?> 
                <?php 
                    calcular_caracter();
                ?>
            <ul>
                <li>numero de vocales: <?=$num_voc?></li>
                <li>numero de consonantes:<?=$num_con?></li>
                <li>palindromo: <?php if($pal){print("Si");} print("No");?> </li>
            </ul>
            <?php }?>
        </div>
    </div>
</body>
</html>